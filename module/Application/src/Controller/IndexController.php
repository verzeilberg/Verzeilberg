<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Element;
use User\Entity\User;
use Blog\Entity\Blog;
use Contact\Entity\Contact;
use Zend\Session\Container;
use StravaApi\Service\StravaDbService;

class IndexController extends AbstractActionController
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var \viewhelpermanager
     */
    protected $vhm;
    protected $tos;
    protected $ts;
    protected $ms;
    protected $blogService;
    protected $eventService;
    protected $imageService;
    protected $checkListService;
    protected $eventCategoryService;
    protected $stravaDbService;

    public function __construct(
        $entityManager,
        $viewHelperManager,
        $twitterOathService,
        $twitterService,
        $contactService,
        $blogService,
        $eventService,
        $imageService,
        $checkListService,
        $eventCategoryService,
        StravaDbService $stravaDbService
    )
    {
        $this->em = $entityManager;
        $this->vhm = $viewHelperManager;
        $this->tos = $twitterOathService;
        $this->ts = $twitterService;
        $this->ms = $contactService;
        $this->blogService = $blogService;
        $this->eventService = $eventService;
        $this->imageService = $imageService;
        $this->checkListService = $checkListService;
        $this->eventCategoryService = $eventCategoryService;
        $this->stravaDbService = $stravaDbService;
    }

    public function indexAction()
    {
        $this->vhm->get('inlineScript')->appendFile('/js/custom/index.js');
        $this->vhm->get('inlineScript')->appendFile('/js/flipClock/flipclock.js');
        $this->vhm->get('headLink')->appendStylesheet('/css/flipClock/flipclock.css');
        $post = false;
        $blogs = $this->blogService->getOnlineBlogsBasedOnStartAndOffSet(0, 4);

        $tweets = $this->tos->getTwitterUserTimeline(1, 4);

        $tweetsArray = array();
        foreach ($tweets AS $index => $tweet) {
            $tweetsArray[$index]['tweet_text'] = $this->ts->twitterFy($tweet->text);
            $date = new \DateTime($tweet->created_at);
            $timeStamp = $date->getTimestamp();
            $tweetsArray[$index]['tweet_date'] = $this->ts->ShowDate($timeStamp);
        }

        $contact = new Contact();
        $builder = new AnnotationBuilder($this->em);
        $form = $builder->createForm($contact);
        $form->setHydrator(new DoctrineHydrator($this->em, 'Contact\Entity\Contact'));
        $form->bind($contact);
        $form->setAttributes(['action' => '/#contact']);

        $form->add([
            'type' => 'Zend\Form\Element\Captcha',
            'name' => 'captcha',
            'options' => [
                'label' => 'Please verify you are human',
                'captcha' => new Captcha\Dumb(),

            ],
            'attributes' => [
                'class' => 'form-control'
            ],
        ]);


        if ($this->getRequest()->isPost()) {
            $form->setData($this->getRequest()->getPost());
            if ($form->isValid()) {
                $contact->setDateCreated(new \DateTime());
                $this->em->persist($contact);
                $this->em->flush();

                $this->ms->sendMail($contact);
                return $this->redirect()->toRoute('home', array(), array('fragment' => 'contact', 'query' => array('send' => 'true')));
            }
        }

        $post = $this->params()->fromQuery('send', false);

        $upcommingEvent = $this->eventService->getUpcommingEvent();


        //Running stats
        $totalRunActivities = $this->stravaDbService->getTotalActivities('Run');
        $totalRunDistance = $this->stravaDbService->getTotalDistance('Run');
        $totalRunTime = $this->stravaDbService->getTotalTime('Run');
        $averageSpeed = $this->stravaDbService->getAverageSpeed('Run');
        $averageElevation = $this->stravaDbService->getAverageElevation('Run');
        $averageHeartbeat = $this->stravaDbService->getAverageHeartbeat('Run');


        return new ViewModel(
            array(
                'tweets' => $tweetsArray,
                'blogs' => $blogs,
                'form' => $form,
                'upcommingEvent' => $upcommingEvent,
                'post' => $post,
                'totalRunActivities' => $totalRunActivities,
                'totalRunDistance' => $totalRunDistance,
                'totalRunTime' => $totalRunTime,
                'averageSpeed' => $averageSpeed,
                'averageElevation' => $averageElevation,
                'averageHeartbeat' => $averageHeartbeat,
            )
        );
    }

    /**
     * This is the "about" action. It is used to display the "About" page.
     */
    public function aboutAction()
    {

        // Return variables to view script with the help of
        // ViewObject variable container
        return new ViewModel();
    }

    /**
     * This is the "about" action. It is used to display the "About" page.
     */
    public function eventsAction()
    {
        $this->vhm->get('headScript')->appendFile('/js/eventsFrontEnd.js');
        $this->vhm->get('headScript')->appendFile('/js/lodash.js');
        $this->vhm->get('headScript')->appendFile('/js/moment.js');
        $this->vhm->get('headLink')->appendStylesheet('/css/events.css');
        $currentYear = new \DateTime();
        $year = $currentYear->format('Y');
        $categoryId = 'all';
        if ($this->getRequest()->isPost()) {
            $year = $this->getRequest()->getPost('year');
            $categoryId = $this->getRequest()->getPost('category');
        }

        $events = $this->eventService->getEventsByYearAndCategory($year, $categoryId);
        $categories = $this->eventCategoryService->getEventCategories();
        $years = $this->eventService->getYearsOfEvents();
        $locations = $this->eventService->createEventsArrayForMaps($events);


        // Return variables to view script with the help of
        // ViewObject variable container
        return new ViewModel(array(
            'categories' => $categories,
            'year' => $year,
            'categoryId' => $categoryId,
            'years' => $years
        ));
    }

    /**
     * This is the "event" action. It is used to display the "event" page.
     */
    public function eventAction()
    {
        $id = (int)$this->getRequest()->getPost('eventId');
        $succes = true;
        $errorMessage = null;
        if (empty($id)) {
            $succes = false;
            $errorMessage = 'Geen id meegegeven.';
        }
        $event = $this->eventService->getEventById($id);
        if (empty($event)) {
            $succes = false;
            $errorMessage = 'Event niet gevonden';
        }

        $eventArray = [];
        $eventArray['eventStartDate'] = $event->getEventStartDate()->format('Y-m-d');
        $eventArray['eventEndDate'] = $event->getEventEndDate()->format('Y-m-d');
        $eventArray['title'] = $event->getTitle();
        $eventArray['labelText'] = $event->getLabelText();
        $eventArray['text'] = $event->getText();
        $eventArray['category'] = $event->getCategory()->getName();
        $eventArray['categoryImage'] = $event->getCategory()->getFile()->getPath();
        $image = $event->getEventImage();
        $eventArray['eventImage'] = $image->getImageTypes('original')[0]->getFolder() . $image->getImageTypes('original')[0]->getFileName();

        // Return variables to view script with the help of
        // ViewObject variable container
        return new JsonModel(array(
            'succes' => $succes,
            'event' => $eventArray,
            'errorMessage' => $errorMessage
        ));
    }

    public function getLocationsAction()
    {
        $success = true;
        $errorMessage = null;

        $year = $this->getRequest()->getPost('year');
        $categoryId = $this->getRequest()->getPost('category');

        $events = $this->eventService->getEventsByYearAndCategory($year, $categoryId);
        $categories = $this->eventCategoryService->getEventCategories();
        $years = $this->eventService->getYearsOfEvents();
        $locations = $this->eventService->createEventsArrayForMaps($events);
        $events = $this->eventService->getEventsByYearAndCategory($year, $categoryId, true);

        return new JsonModel(array(
            'success' => $success,
            'years' => $years,
            'categories' => $categories,
            'locations' => $locations,
            'events' => $events,
            'errorMessage' => $errorMessage
        ));
    }
}

<?php

namespace Application\Controller;

use Blog\Service\blogService;
use CheckList\Service\checkListService;
use Contact\Service\contactService;
use Event\Service\eventCategoryService;
use Event\Service\eventService;
use StravaApi\Service\StravaService;
use Twitter\Service\twitterOathService;
use Twitter\Service\twitterService;
use UploadImages\Service\imageService;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\View\Model\JsonModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder;
use Laminas\Captcha;
use Contact\Entity\Contact;

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
    protected $config;

    /*
     * @var StravaService
     */
    protected $stravaService;

    public function __construct(
        $entityManager,
        $viewHelperManager,
        twitterOathService $twitterOathService,
        twitterService $twitterService,
        contactService $contactService,
        blogService $blogService,
        eventService $eventService,
        imageService $imageService,
        checkListService $checkListService,
        eventCategoryService $eventCategoryService,
        StravaService $stravaService,
        array $config
    )
    {
        $this->entityManager = $entityManager;
        $this->viewHelperManager= $viewHelperManager;
        $this->twitterOathService = $twitterOathService;
        $this->twitterService = $twitterService;
        $this->contactService = $contactService;
        $this->blogService = $blogService;
        $this->eventService = $eventService;
        $this->imageService = $imageService;
        $this->checkListService = $checkListService;
        $this->eventCategoryService = $eventCategoryService;
        $this->stravaService = $stravaService;
        $this->config = $config;
    }

    public function indexAction()
    {
        $this->viewHelperManager->get('inlineScript')->appendFile('/js/custom/index.js');
        $this->viewHelperManager->get('inlineScript')->appendFile('/js/flipClock/flipclock.js');
        $this->viewHelperManager->get('headLink')->appendStylesheet('/css/flipClock/flipclock.css');

        $post = false;
        $blogs = $this->blogService->getOnlineBlogsBasedOnStartAndOffSet(0, 4);

        $tweets = $this->twitterOathService->getTwitterUserTimeline(1, 4);

        $tweetsArray = array();

        foreach ($tweets AS $index => $tweet) {
            $tweetsArray[$index]['tweet_text'] = $this->twitterService->twitterFy($tweet->text);
            $date = new \DateTime($tweet->created_at);
            $timeStamp = $date->getTimestamp();
            $tweetsArray[$index]['tweet_date'] = $this->twitterService->ShowDate($timeStamp);
        }

        $contact = new Contact();
        $builder = new AnnotationBuilder($this->entityManager);
        $form = $builder->createForm($contact);
        $form->setHydrator(new DoctrineHydrator($this->entityManager, 'Contact\Entity\Contact'));
        $form->bind($contact);
        $form->setAttributes(['action' => '/#contact']);

        $form->add([
            'type' => 'Laminas\Form\Element\Captcha',
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
                $this->entityManager->persist($contact);
                $this->entityManager->flush();

                $this->contactService->sendMail($contact);
                return $this->redirect()->toRoute('home', array(), array('fragment' => 'contact', 'query' => array('send' => 'true')));
            }
        }

        $post = $this->params()->fromQuery('send', false);

        $upcommingEvent = $this->eventService->getUpcommingEvent();


        //Running stats
        $totalRunActivities = $this->stravaService->activityRepository->getTotalItems('Run');
        $totalRunDistance = $this->stravaService->activityRepository->getTotalDistance('Run');
        $totalRunTime = $this->stravaService->activityRepository->getTotalTime('Run');
        $averageSpeed = $this->stravaService->activityRepository->getAverageSpeed('Run');
        $averageElevation = $this->stravaService->activityRepository->getAverageElevation('Run');
        $averageHeartbeat = $this->stravaService->activityRepository->getAverageHeartbeat('Run');

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
        $this->viewHelperManager->get('headScript')->appendFile('/js/eventsFrontEnd.js');
        $this->viewHelperManager->get('headScript')->appendFile('/js/lodash.js');
        $this->viewHelperManager->get('headScript')->appendFile('/js/moment.js');
        $this->viewHelperManager->get('headLink')->appendStylesheet('/css/events.css');
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

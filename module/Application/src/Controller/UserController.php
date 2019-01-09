<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use DoctrineORMModule\Form\Annotation\AnnotationBuilder;
use Zend\Form\Form;
use User\Entity\User;
use Contact\Entity\Contact;
use Zend\Session\Container;

class UserController extends AbstractActionController {

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

    public function __construct(
                $entityManager, 
                $viewHelperManager, 
                $twitterOathService, 
                $twitterService, 
                $contactService, 
                $blogService, 
                $eventService, 
                $imageService,
                $checkListService
            ) {
                $this->em = $entityManager;
                $this->vhm = $viewHelperManager;
                $this->tos = $twitterOathService;
                $this->ts = $twitterService;
                $this->ms = $contactService;
                $this->blogService = $blogService;
                $this->eventService = $eventService;
                $this->imageService = $imageService;
                $this->checkListService = $checkListService;
    }

    /**
     * The "profiel" action displays the info about currently logged in user.
     */
    public function profielAction() {
        $id = $this->params()->fromRoute('id');

        if ($id != null) {
            $user = $this->em->getRepository(User::class)
                    ->find($id);
        } else {
            $user = $this->currentUser();
        }

        if ($user == null) {
            $this->getResponse()->setStatusCode(404);
            return;
        }

        if (!$this->access('profile.any.view') &&
                !$this->access('profile.own.view', ['user' => $user])) {
            return $this->redirect()->toRoute('not-authorized');
        }

        return new ViewModel([
            'user' => $user
        ]);
    }

    /**
     * The "edit" action displays the info about currently logged in user and let him edit the profile.
     */
    public function editAction() {
        $container = new Container('cropImages');
        $container->getManager()->getStorage()->clear('cropImages');
        $id = $this->params()->fromRoute('id');

        if ($id != null) {
            $user = $this->em->getRepository(User::class)
                    ->find($id);
        } else {
            $user = $this->currentUser();
        }

        if ($user == null) {
            $this->getResponse()->setStatusCode(404);
            return;
        }

        if (!$this->access('profile.any.view') &&
                !$this->access('profile.own.view', ['user' => $user])) {
            return $this->redirect()->toRoute('not-authorized');
        }

        $builder = new AnnotationBuilder($this->em);
        $form = $builder->createForm($user);
        $form->setHydrator(new DoctrineHydrator($this->em, 'User\Entity\User'));
        $form->bind($user);

        $Image = $this->imageService->createImage();
        $formEventImage = $this->imageService->createImageForm($Image);

        if ($this->getRequest()->isPost()) {

            $form->setData($this->getRequest()->getPost());
            $formEventImage->setData($this->getRequest()->getPost());
            if ($form->isValid() && $formEventImage->isValid()) {

                $aImageFile = '';
                $aImageFile = $this->getRequest()->getFiles('image');

                //Upload image file's
                if ($aImageFile['error'] === 0) {
                    //Upload image file's
                    $cropImageService = $this->cropImageService;
                    //Upload original file
                    $imageUploadSettings['uploadFolder'] = 'img/userFiles/user/original/';
                    $imageFiles = $this->cropImageService->uploadImage($aImageFile, $imageUploadSettings, 'original', $Image, 1);
                    if (is_array($imageFiles)) {

                        $folderOriginal = $imageFiles['imageType']->getFolder();
                        $fileName = $imageFiles['imageType']->getFileName();
                        $image = $imageFiles['image'];
                        //Upload thumb 150x150
                        $imageFiles = $cropImageService->resizeAndCropImage('public/' . $folderOriginal . $fileName, 'public/img/userFiles/user/thumb/', 150, 150, '150x150', $image);
                        //Create 400x200 crop
                        $imageFiles = $this->cropImageService->createCropArray('400x200', $folderOriginal, $fileName, 'public/img/userFiles/user/400x200/', 400, 200, $image);
                        $image = $imageFiles['image'];
                        $cropImages = $imageFiles['cropImages'];
                        //Create return URL
                        $returnURL = $this->cropImageService->createReturnURL('profiel', 'edit');

                        //Create session container for crop
                        $this->cropImageService->createContainerImages($cropImages, $returnURL);

                        //Save user image
                        $this->em->persist($image);
                        $this->em->flush();
                        $user->setEventImage($image);
                    }
                } else {

                    if (!empty($imageFiles)) {
                        $this->flashMessenger()->addErrorMessage($imageFiles);
                    }
                }
                //End upload image

                if ($aImageFile['error'] === 0 && is_array($imageFiles)) {
                    return $this->redirect()->toRoute('beheer/images', array('action' => 'crop'));
                } else {
                    return $this->redirect()->toRoute('profiel');
                }
            } else {
                var_dump($form->getMessages());
            }
        }

        return new ViewModel([
            'user' => $user,
            'form' => $form
        ]);
    }

    public function userAction() {
        
        
        $id = $this->params()->fromRoute('id');
        if ($id != null) {
            $user = $this->em->getRepository(User::class)
                    ->find($id);
            $checkLists = $this->checkListService->getChecklistsByUserAndStatus($user, 1);
        } else {
            $user = $this->currentUser();
            $checkLists = $this->checkListService->getChecklistsByUser($user);
        }

        if ($user == null) {
            $this->getResponse()->setStatusCode(404);
            return;
        }
        
        
        return new ViewModel([
            'user' => $user,
            'checkLists' => $checkLists
        ]);
    }
}

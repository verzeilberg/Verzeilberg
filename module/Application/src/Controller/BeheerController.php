<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Contact\Entity\Contact;

class BeheerController extends AbstractActionController {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var \viewhelpermanager
     */
    protected $vhm;
    protected $tos;
    protected $bs;

    public function __construct($entityManager, $viewHelperManager, $beheerService) {

        $this->em = $entityManager;
        $this->vhm = $viewHelperManager;
        $this->bs = $beheerService;
    }

    public function indexAction() {
        $this->vhm->get('headScript')->appendFile('/js/custom/beheer.js');
        $this->vhm->get('headScript')->appendFile('https://www.google.com/jsapi');
        $this->layout('layout/beheer');
        
        $diskInfo = $this->bs->getDiskSpace();
        $contactForms = $this->em->getRepository(Contact::class)
                ->findBy([], ['dateCreated' => 'DESC'],5,0);
        
        return new ViewModel(
                array(
                   'diskInfo' => $diskInfo,
                   'contactForms' => $contactForms
                    
                )
        );
    }

}

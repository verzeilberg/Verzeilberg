<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
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

    public function __construct($entityManager, $viewHelperManager) {

        $this->em = $entityManager;
        $this->vhm = $viewHelperManager;
    }

    public function indexAction() {
        $this->vhm->get('headScript')->appendFile('/js/custom/beheer.js');
        $this->vhm->get('headScript')->appendFile('https://www.google.com/jsapi');
        $this->layout('layout/beheer');
        
        $contactForms = $this->em->getRepository(Contact::class)
                ->findBy([], ['dateCreated' => 'DESC'],5,0);
        
        return new ViewModel(
                array(
                   'contactForms' => $contactForms
                    
                )
        );
    }

}

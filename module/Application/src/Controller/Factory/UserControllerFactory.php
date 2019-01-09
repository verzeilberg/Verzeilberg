<?php

namespace Application\Controller\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\UserController;
use Twitter\Service\twitterOathService;
use Twitter\Service\twitterService;
use Contact\Service\contactService;
use Blog\Service\blogService;
use Event\Service\eventService;
use UploadImages\Service\imageService;
use CheckList\Service\checkListService;

class UserControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, Array $options = null) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $viewHelperManager = $container->get('ViewHelperManager');
        $config = $container->get('config');
        $twitterService = new twitterService();
        $twitterOathService = new twitterOathService($config, $twitterService);
        $contactService = new contactService();
        $blogService = new blogService($entityManager);
        $eventService = new eventService($entityManager);
        $imageService = new imageService($entityManager, $config);
        $checkListService = new checkListService($entityManager);
        
        
        return new UserController(
                $entityManager, 
                $viewHelperManager, 
                $twitterOathService, 
                $twitterService, 
                $contactService, 
                $blogService, 
                $eventService, 
                $imageService,
                $checkListService
                );
    }

}

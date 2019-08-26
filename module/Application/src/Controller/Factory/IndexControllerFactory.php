<?php

namespace Application\Controller\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\IndexController;
use Twitter\Service\twitterOathService;
use Twitter\Service\twitterService;
use Contact\Service\contactService;
use Blog\Service\blogService;
use Event\Service\eventService;
use Event\Service\eventCategoryService;
use UploadImages\Service\imageService;
use CheckList\Service\checkListService;
use StravaApi\Service\StravaDbService;

class IndexControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, Array $options = null) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $viewHelperManager = $container->get('ViewHelperManager');
        $config = $container->get('config');
        $twitterService = new twitterService($config);
        $twitterOathService = new twitterOathService($config, $twitterService);
        $contactService = new contactService($entityManager);
        $blogService = new blogService($entityManager);
        $eventService = new eventService($entityManager);
        $eventCategoryService = new eventCategoryService($entityManager);
        $imageService = new imageService($entityManager, $config);
        $checkListService = new checkListService($entityManager);
        $stravaDbService = new StravaDbService($entityManager);
        
        return new IndexController(
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
                $stravaDbService
                );
    }

}

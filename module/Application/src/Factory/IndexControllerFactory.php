<?php

namespace Application\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\IndexController;
use Twitter\Service\twitterOathService;
use Twitter\Service\twitterService;
use Event\Service\eventService;
use UploadImages\Service\imageService;

class IndexControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, Array $options = null) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $viewHelperManager = $container->get('ViewHelperManager');
        $config = $container->get('config');
        $twitterService = new twitterService();
        $twitterOathService = new twitterOathService($config, $twitterService);
        $eventService = new eventService();
        $imageService = new imageService($em, $config);
        
        return new IndexController($entityManager, $viewHelperManager, $twitterOathService, $twitterService, $contactService, $eventService, $imageService);
    }

}

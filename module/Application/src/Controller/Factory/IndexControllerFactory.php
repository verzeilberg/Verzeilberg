<?php

namespace Application\Controller\Factory;

use StravaApi\Entity\Activity;
use StravaApi\Entity\ActivityImportLog;
use StravaApi\Entity\Round;
use StravaApi\Service\StravaService;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;
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
        $activityRepository = $entityManager->getRepository(Activity::class);
        $roundRepository = $entityManager->getRepository(Round::class);
        $activityImportLogRepository = $entityManager->getRepository(ActivityImportLog::class);
        $stravaService = new StravaService($config, $activityRepository, $roundRepository, $activityImportLogRepository);

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
                $stravaService,
                $config
                );
    }

}

<?php

namespace Application\Controller\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\BeheerController;
use Application\Service\beheerService;

class BeheerControllerFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, Array $options = null) {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $viewHelperManager = $container->get('ViewHelperManager');
        $beheerService = new beheerService();
        return new BeheerController($entityManager, $viewHelperManager, $beheerService);
    }

}

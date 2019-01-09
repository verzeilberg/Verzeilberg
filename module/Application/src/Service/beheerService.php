<?php

namespace Application\Service;

use Zend\ServiceManager\ServiceLocatorInterface;
use Eden;

class beheerService implements beheerServiceInterface {

    public function getDiskSpace() {
        $diskinfo = [];
        $diskinfo['useddiskspace'] = ceil(disk_total_space('/home/hosting/sander/WWW/') / 1000000);
        $diskinfo['freediskspace'] = ceil(disk_free_space('/home/hosting/sander/WWW/') / 1000000);
        return $diskinfo;
    }
}

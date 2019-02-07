<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
use Zend\Session\Storage\SessionArrayStorage;
use Zend\Session\Validator\RemoteAddr;
use Zend\Session\Validator\HttpUserAgent;
use Zend\Cache\Storage\Adapter\Filesystem;

return [
    // Session configuration.
    'session_config' => [
        'cookie_lifetime' => 60 * 60 * 1, // Session cookie will expire in 1 hour.
        'gc_maxlifetime' => 60 * 60 * 24 * 30, // How long to store session data on server (for 1 month).        
    ],
    // Session manager configuration.
    'session_manager' => [
        // Session validators (used for security).
        'validators' => [
            RemoteAddr::class,
            HttpUserAgent::class,
        ]
    ],
    // Session storage configuration.
    'session_storage' => [
        'type' => SessionArrayStorage::class
    ],
    // Cache configuration.
    'caches' => [
        'FilesystemCache' => [
            'adapter' => [
                'name' => Filesystem::class,
                'options' => [
                    // Store cached data in this directory.
                    'cache_dir' => './data/cache',
                    // Store cached data for 1 hour.
                    'ttl' => 60 * 60 * 1
                ],
            ],
            'plugins' => [
                [
                    'name' => 'serializer',
                    'options' => [
                    ],
                ],
            ],
        ],
    ],
    'twitter_credentials' => [
        'oauth_access_token' => '320650214-nH3o3BjVYfTP9HfSWYmFkBUcoyC5HwQ2qUhz8yAz',
        'oauth_access_token_secret' => '8JMlfd5bsd7LrFhHvityFmtUCGiizUvNjeVUqcDpw',
        'consumer_key' => 'YguWLyI3fltBiq1VSqfQQ',
        'consumer_secret' => 'CjpZhinCu6jRxc0wTGwIJyGko3NxO1QDtHZEZFl6EE',
        'userId' => '320650214'
    ],
    'youtube_credentials' => [
       'consumer_key' => 'AIzaSyBd0ib8T5YC8FG_zRH-IxOA8blnLvqJ1xM'
    ],
    'email_settings' => [
        'server' => 'imap.zeke.nl',
        'user' => 'sander@verzeilberg.nl',
        'password' => 'Joker512011'
    ],
    'imageUploadSettings' => [
        'event' => [
            'uploadFolder' => 'img/userFiles/event/original/',
            'uploadeFileSize' => '5000000000000000',
            'allowedImageTypes' => [
                'image/jpeg',
                'image/png',
                'image/gif'
            ],
        ],
        'rootPath' => $_SERVER['DOCUMENT_ROOT'] . '/img/userFiles',
    ],
];

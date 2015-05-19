<?php

require __DIR__ . '/vendor/autoload.php';

return [
    /**
     * admin user and password
     */
    'admin' => [
        'name' => 'admin',
        'password' => ''
    ],
    /**
     * page-ID for API
     */
  'pageId' => 'backend/',
    /**
     * language used for backend
     */
  'lang' => 'en',
    /**
     * debug mode, enabled if you develop plugins to disabled caches etc.
     */
  'debug' => false,
];
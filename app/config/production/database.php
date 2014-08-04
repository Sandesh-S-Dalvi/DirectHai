<?php

return array(

/*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
*/

    'profile' => false,

    'default' => 'production',

    'connections' => array(

        'production' => array(
            'driver'   => 'mysql',
            'host'     => $_SERVER['DB1_HOST'],
            'database' => $_SERVER['DB1_NAME'],
            'username' => $_SERVER['DB1_USER'],
            'password' => $_SERVER['DB1_PASS'],
            'charset'  => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'   => '',
            ),
        ),

/*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
*/

    'redis' => array(

        'cluster' => false,

        'default' => array(
            'host'     => $_SERVER['CACHE1_HOST'],
            'port'     => $_SERVER['CACHE1_PORT'],  
            'database' => 0,
        ),

    ),


);
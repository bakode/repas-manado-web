<?php

/*
|----------------------------------------------------
| Start PHP Session                                 /
|----------------------------------------------------
*/

    session_start();

/*
|----------------------------------------------------
| Register The 3rd Party Library                    /
|----------------------------------------------------
*/

    require __DIR__ . ('/../../vendor/autoload.php');

/*
|----------------------------------------------------
| This Application Setting                          /
|----------------------------------------------------
*/

    $settings = require __DIR__ . '/settings.php';

    $app = new \Slim\App($settings);

/*
|----------------------------------------------------
| Dependencies File                                 |
|----------------------------------------------------
*/

    require __DIR__  . ('/dependencies.php');

/*
|----------------------------------------------------
| Dependencies File                                 |
|----------------------------------------------------
*/
    require __DIR__  . ('/controller.php');

/*
|----------------------------------------------------
| Dependencies File                                 |
|----------------------------------------------------
*/
    require __DIR__  . ('/middleware.php');

/*
|----------------------------------------------------
| Routers File                                      |
|----------------------------------------------------
*/

    require __DIR__  . ('/../routes.php');
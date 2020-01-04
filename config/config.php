<?php
use SimCore\core\Bootstrap as Bootstrap;
use \SimCore\core\Config as Config;

Bootstrap::config(__DIR__, array(
    '/config/%s.php',    
    '/controllers/%s.php',
    '/views/%s.php'
    ));
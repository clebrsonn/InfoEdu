<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 18/06/2016
 * Time: 09:54
 */
require_once "bootstrap.php";


return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 17/06/2016
 * Time: 07:45
 */
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


use Paada\Config\Settings\BDConnection;

require_once dirname(__FILE__) . "/core/vendor/autoload.php";
//include_once dirname(__FILE__) . "/lib/config/conn.php";
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$entities = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src/Model"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
// obtaining the entity manager
$entityManager = EntityManager::create(BDConnection::getConnection(), $entities);
return $entityManager;




// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/Model"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create(BDConnection::getConnection(), $config);

<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 16/06/2016
 * Time: 23:58
 */

namespace Paada\Config\Settings;

use PDO;

/**
 * @property array connection
 */
class BDConnection
{

    private $hostname;

    /*     * * mysql username ** */
    private $username;

    /*     * * mysql password ** */
    private $password;
    private $database;

    private $dbh;


    public function __construct()
    {
        $this->hostname = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'paada';
    }

    public function conectar()
    {
        $this->dbh = new PDO("mysql:host=$this->hostname;dbname=$this->database", $this->username, $this->password);

        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$con->close();
    }

    public function close()
    {
        $this->dbh = null;
    }

    public static function getConnection()
    {
        $connection = array(
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => '',
            'dbname' => 'reader',
            'host' => 'localhost',
            'port' => '3306'
        );

        return $connection;
    }


}
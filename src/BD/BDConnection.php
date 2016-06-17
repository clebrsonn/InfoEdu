<?php
/**
 * Created by PhpStorm.
 * User: clebr
 * Date: 16/06/2016
 * Time: 23:58
 */

namespace Paada\BD;

use PDO;

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

}
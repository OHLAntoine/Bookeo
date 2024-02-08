<?php
// Singleton : une seule instance

namespace configs\database;

use PDO;

class Mysql
{
    private $dbname;
    private $dbuser;
    private $dbpassword;
    private $dbport;
    private $dbhost;
    private $pdo = null;
    private static $_instance = null;

    private function __construct()
    {
        $conf = require_once _ROOTPATH_.'/configs/connect.php';

        if (isset($conf['dbname'])) {
            $this->dbname = $conf['dbname'];
        }
        if (isset($conf['dbuser'])) {
            $this->dbuser = $conf['dbuser'];
        }
        if (isset($conf['dbpassword'])) {
            $this->dbpassword = $conf['dbpassword'];
        }
        if (isset($conf['dbport'])) {
            $this->dbport = $conf['dbport'];
        }
        if (isset($conf['dbhost'])) {
            $this->dbhost = $conf['dbhost'];
        }
    }

    public static function getInstance():self
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Mysql();
        }

        return self::$_instance;
    }

    public function getPDO():\PDO
    {
        if (is_null($this->pdo)) {
            $this->pdo = new \PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpassword);
        }

        return $this->pdo;
    }
}
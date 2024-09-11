<?php
	error_reporting(0);
	const WEB = 'https://helioscorp.org';
	
	class db{
        // Properties
        private $dbhost = 'localhost';
        private $dbuser = 'corred10_webmaster';
        private $dbpass = 'UQ..;QLsWqt0';
        private $dbname = 'corred10_helioscorp';        

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbConnection->exec("set names utf8");
            return $dbConnection;
        }
    }
?>
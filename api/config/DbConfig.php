<?php

class DbConfig
{
    private $instance = null;
    private $connection;
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;

    public function __construct()
    {
        if ($this->instance == null) {
            $this->instance = $this->construct();
        }
        return $this->instance;
    }

    private function construct()
    {
        $configString = file_get_contents("config/config.json");
        $config = json_decode($configString, true);
        $this->host = $config["db"]["host"];
        $this->dbname = $config["db"]["database"];
        $this->username = $config["db"]["username"];
        $this->password = $config["db"]["password"];
        $this->port = $config["db"]["port"];
        return $this;
    }

    public function getConnection()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname, $this->port);

        if ($this->connection->connect_errno) {
            printf("Connect failed: %s\n", $this->connection->connect_error);
            exit();
        } else {
            return $this->connection;
        }
    }

    public function tryConnection($host, $username, $password, $dbname)
    {
        $testConn = new mysqli($host, $username, $password, $dbname);
        $success = false;
        if ($testConn->connect_errno) {
            printf("Connect failed: %s\n", $this->connection->connect_error);
        } else {
            $res = $testConn->query("SELECT 1");
            $row = $res->fetch_assoc();
            if ($row != null) {
                $success = true;
            }
        }
        return $success;
    }
}

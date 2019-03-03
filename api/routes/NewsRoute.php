<?php
require_once "interfaces\Route.php";
require_once "config\DbConfig.php";

class NewsRoute implements Route
{
    public function getHandler($params)
    {
        $config = new DbConfig();
        $connection = $config->getConnection();
        $res = $connection->query("SELECT * from user");
        $row = $res->fetch_assoc();
        echo json_encode($row);
    }

    public function postHandler($params, $body)
    {

    }

    public function deleteHandler($params)
    {

    }

    public function putHandler($params, $body)
    {

    }
}

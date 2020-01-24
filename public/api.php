<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

class MyDB extends SQLite3 {
    function __construct() {
        $this->open('customers.db');
    }
}
$db = new MyDB();
if(!$db) {
    echo $db->lastErrorMsg();
    exit();
}

$app = new \Slim\App;
$app->get(
    '/api/participants',


    function (Request $request, Response $response, array $args) use ($db){


        $sql = "SELECT name, surname FROM customer";
        $ret = $db->query($sql);

        $participants = [];
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            //$participants = ["id" => $row["id"], "firstname" => $row["name"], "lastname" => $row["surname"]];
        array_push($participants,['id' => $row["id"], 'firstname' => $row["name"], 'lastname' => $row["surname"]]);



        }
        return $response->withJson($participants);
        $db->close();
    }
);
$app->post(
    '/api/participants',
    function (Request $request, Response $response, array $args) use ($db)
    {
        $requestData = $request->getParsedBody();
        //$insert1 = "INSERT INTO customer (name, surname) VALUES(.$requestData,.$requestData'surname'.)";
       // $intsertret = $db->query($insert1);
        $db->close();

    }


);
$app->run();



<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';


$app = new \Slim\App;
$app->get(
    '/api/participants',

    function (Request $request, Response $response, array $args, $ret) {
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
        $sql = "SELECT name, surname FROM customer";
        $ret = $db->query($sql);
        while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            $participants []=''id' => $row['id'], 'firstname' => $row['name'], 'lastname' => $row['surname']';
            return $response->withJson($participants);
        }
        $db->close();

    }
);
$app->run();



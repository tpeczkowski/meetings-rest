<?php
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
/*$create = "CREATE TABLE `customer` (
    `id` INTEGER PRIMARY KEY AUTOINCREMENT,
    `name` TEXT,
    `surname` TEXT,
    `email` TEXT
)";*/
//$table = $db->query($create);
$sql = "SELECT id, name, surname FROM customer";
$ret = $db->query($sql);
$insert1 = "INSERT INTO customer (name, surname) VALUES('W', 'Krzak')";
$interstret = $db->query($insert1);

while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
    echo "id = ". $row['id'] . ", ";
    echo "name = ". $row['name'] . ", ";
    echo "surname = ". $row['surname'] ."<br>";
}
$db->close();
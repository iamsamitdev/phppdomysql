<?php

$host   = 'localhost';
$user   = 'root';
$pass   = '1234';
$dbname = 'mydb';
$dbport = '3306';

try {

    $connect = new PDO(
        'mysql:host=' . $host .';port='.$dbport.';dbname=' . $dbname,
        $user,
        $pass
    );

    $connect->exec("SET NAMES 'utf8'");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // echo "connect database success";

}
catch (Exception $e)
{
    die(print_r($e->getMessage()));
}

<?
include 'Sql.php';


$sqlClass = new Sql();
$sqlClass->setFields(' name');
$sqlClass->setFields('*');
$sqlClass->setFields('name2');
$sqlClass->setFields('name3, name5');
$sqlClass->setFields('');
$sqlClass->setFields(' ');
var_dump($sqlClass->getFields());


?>
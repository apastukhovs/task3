<?
include 'Sql.php';

$sqlClass = new Sql();
$sqlClass->setFields('*');
$sqlClass->setFields(' name');
$sqlClass->setFields('name2');
var_dump($sqlClass->getFields());


?>

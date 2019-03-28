<?
include 'Sql.php';

$sqlClass->setFields('*');
$sqlClass = new Sql();
$sqlClass->setFields(' name');
$sqlClass->setFields('name2');
var_dump($sqlClass->getFields());


?>

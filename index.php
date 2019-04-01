<?php
include_once 'libs/config.php';
include_once 'libs/File.php';

<<<<<<< HEAD

$objFile = new File(FILE);
/********* get file content *********/
$file1 = $objFile->getFileContent(FILE);
$str = 5;
$sym = 8;
$line1 = $objFile->getString($str);
$char = $objFile->readSymbol($str, $sym);
/******** change string ********/
$new_str = "new ;ine";
$change_str = 8;
$objFile->setString($new_str, $change_str);
$objFile->saveChanges('new_file1.txt');
$file2 = $objFile->getFileContent('new_file1.txt');
/************ change symbol in string *************/
$symbol = 'p';
$number_str = 4;
$change_symbol = 3;
$line2 = $objFile->setSymbol($symbol, $number_str, $change_symbol);
$objFile->saveChanges('new_file2.txt');
$file3 = $objFile->getFileContent('new_file2.txt');
=======
$sqlClass = new Sql();
$sqlClass->setFields('*');
$sqlClass->setFields(' name');
$sqlClass->setFields('name2');
var_dump($sqlClass->getFields());
>>>>>>> 3a58440f6aff54d5369c562423ef03f4cdd17bde

var_dump($file3);
var_dump($changedData);

<<<<<<< HEAD

include_once 'template/index.php';
?>
=======
?>
>>>>>>> 3a58440f6aff54d5369c562423ef03f4cdd17bde

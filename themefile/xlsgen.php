<?php session_start();
/*
Template Name: Excel Generator Template
Author: Sourabh Kumar Sharma
Description: This is a plugin that is used to generate the Excel Sheet from the database
*/
?>
<?php

$filename = "filename.xls";
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename='.$filename);
header('Pragma: no-cache');
header('Expires: 0');
session_start();
global $wpdb;

$funcCls  = new Func(); /*Declare the object of the AdminFunc class that contains the member function to query the required database table */
$xlsClass = new XLSGenerate(); /*Initialize the class here*/
echo $_SESSION['xlsgentbnm'];
echo "This is a simple test here so please ignore this test here";
$result = $xlsClass->createXLS($_SESSION['xlsgentbnm']);
echo $result;
?>
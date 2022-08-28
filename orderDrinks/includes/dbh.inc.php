<?php

session_start(); 

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "ordersdb";

$conn =  mysqli_connect("localhost", "root", "", "ordersdb"); //connects to data base

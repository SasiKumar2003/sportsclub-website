<?php

$sname= "localhost";
$uname= "root";
$password ="";
$db_name = "projectite";

$conn= mysqli_connect($sname,$uname,$password,$db_name);

if(!$conn){
    echo "connection failed!";
}
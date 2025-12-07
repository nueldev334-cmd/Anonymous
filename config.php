<?php
$servername="localhost:3306";
$username="root";
$password="root";
$dbname="Anonymous";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed :".$conn->connect_error);
    
}


<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_form";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("erreur connection!");
}


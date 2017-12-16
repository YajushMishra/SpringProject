<?php
include('db.php');
$obj=new db();
$con=$obj->connect();

$result=$obj->deletedata($con,$_GET['id']);

if($result==true)
	header('location:home_page.php?control=list');//redirect to home_page.php
else
		echo 'error';

	







?>
<?php
//validate.php

$name_pattern='/^[a-zA-Z]{3,10}$/';
if(!preg_match($name_pattern,$_POST['fullname'])){
	//pattern not matched
	$name_error='enter name!';
	$n=false;
}else{
	$n=true;
}
?>
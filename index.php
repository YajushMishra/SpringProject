<link href='bootstrap-3.3.7/dist/css/bootstrap.min.css' rel='stylesheet'>
<h1>LOGIN SCREEN</h1>
<?php
if(isset($_POST['submit'])){
	include('db.php');
	$obj=new db();
	$con=$obj->connect();
	if($obj->login($con,$_POST)){
		//user is authenticated,GO TO A NEW PAGE
		//create sesssion
		session_start();
		$_SESSION['sess_email']=$_POST['emailid'];
		$_SESSION['sess_password']=$_POST['password1'];
		
		
		header('location:home_page.php');
	}else{
		echo 'invalid username and password';
	}
}	
?>

<form action='' method='post' name='login'>


<table class='table table-bordered'>

<tr>
	<td>EMAIL</td>
	<td><input type='email' name='emailid' required placeholder='enter email'></td>
</tr>
<tr>
	<td>PASSWORD</td>
	<td><input type='password' name='password1' required placeholder='enter password'></td>
</tr>

<tr>
	<td colspan=2><input type='submit' name='submit' value='Sign In' class='btn-info'></td>
</tr>
	

</table>
</form>
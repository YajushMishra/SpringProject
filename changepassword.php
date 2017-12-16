
<h1>Change password</h1>

<?php

if(isset($_POST['submit1'])){
	if($_POST['current_pass']==$_SESSION['sess_password']){
		include('db.php');
		$obj=new db();
		$con=$obj->connect();
		if($obj->changepassword($con,$_POST,$_SESSION['sess_email'])){
			echo 'Updated';
		}else{
			echo 'Error';
		}
	}else{
		echo'current password is not ok';
	}
}

	
?>


<form action='' method='post' name='changepassword'>


<table class='table table-bordered'>

<tr>
	<td>current password</td>
	<td><input type='password' name='current_pass' required placeholder='current password'></td>
</tr>
<tr>
	<td>NEW PASSWORD</td>
	<td><input type='password' name='new_pass' required placeholder='new password'></td>
</tr>
<tr>
	<td>CONFIRM PASSWORD</td>
	<td><input type='password' name='confrim_pass_pass' required placeholder='confirm password'></td>
</tr>


<tr>
	<td colspan=2><input type='submit' name='submit1' value='update' class='btn-info'></td>
</tr>
	

</table>
</form>
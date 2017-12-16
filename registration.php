<?php
if(isset($_POST['submit'])){
	include('validation.php');
	if($n==true){
		
		
		include('db.php');
		//upload file
		$source=$_FILES['user_photo']['tmp_name'];
		$dest='photos/'.$_FILES['user_photo']['name'];
		move_uploaded_file($source,$dest);
		
		//print_r($_FILES);
		//exit;
		//save data
		$obj=new db();//	CREATES OBJECT OF THE CLASS
		$db_conn=$obj->connect();//calling the function 
		$result=$obj->savedata($db_conn,$_POST,$_FILES['user_photo']['name'],$_FILES['user_photo']['type']);//store data in table
		if($result){
			echo 'data saved!';
		}else{
				echo 'error!';
		}
	}	
		
}
?>

<form action='' method='post' name='registration'enctype='multipart/form-data'>


<table class='table table-bordered'>
<br>
<tr>
	<td>NAME</td>
	<td>
	<?php
		if(isset($name_error)){echo $name_error;}
		?>
	<input type='text' name='fullname' placeholder='ENTER YOUR NAME' required></td>
	
</tr>
<tr>
	<td>EMAIL</td>
	<td><input type='email' name='emailid' required placeholder='enter email'></td>
</tr>
<tr>
	<td>PASSWORD</td>
	<td><input type='password' name='password1' required placeholder='enter password'></td>
</tr>
<tr>
	<td>GENDER</td>
	<td>
		MALE  <input type='radio' name='gender' value='male' checked>
		FEMALE  <input type='radio' name='gender' value='female'
	</td>
</tr>
<tr>
	<td>ADDRESS</td>
	<td><textarea name='address'></textarea></td>
</tr>
<tr>
	<td>QUALIFICATION</td>
	<td>
		BTECH <input type='checkbox' name='qua[]' value='BTECH'>
		MCA  <input type='checkbox' name='qua[]' value='MCA'>
		BCA  <input type='checkbox' name='qua[]' value='BCA'>
	</td>
</tr>
<tr>
	<td>Upload photo</td>
	<td><input type='file' name='user_photo'></td>
</tr>
<tr>
	<td colspan=2><input type='submit' name='submit' value='Register' class='btn-info'></td>
</tr>
	

</table>
</form>
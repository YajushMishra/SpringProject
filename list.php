
<h1>List of all the users</h1>

<table class='table table-bordered table-striped'>
	<tr>
		<th>ID</th>
		<th>IMAGE</th>
		
		<th>NAME</th>
		<th>EMAIL</th>
		<th>GENDER</th> 
		<th>OPTIONS</th>
	</tr>
<?php
	include("db.php");
	$obj=new db();
	$con=$obj->connect();
	$userdata=$obj->readdata($con);//user data contains data in array
	if($userdata==0){
		echo'<h2>no record found</h2>';
	}else{
	foreach($userdata as $one){
		echo '<tr>';
		echo'<td>'.$one['id'].'</td>';
		echo"<td><img src='photos/".$one['photo_name']."'width=100 height=100></td>";
		echo '<td>'.$one['name'].'</td>';
		echo '<td>'.$one['email'].'</td>';
		echo '<td>'.$one['gender'].'</td>';
		echo"<td><a href='controller.php?id=$one[id]'class='btn btn-danger'>delete</a>";
		echo   "<a href='home_page.php?control=view&id=$one[id]'class='btn btn-info'>view</a></td>";
		
		echo '</tr>';
	}
	}
?>
</table>
		
	
	
		

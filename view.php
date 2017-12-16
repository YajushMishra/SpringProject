

<table class='table table-bordered table-striped'>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>GENDER</th>
	</tr>
	<?php
include('db.php');
$obj=new db();
$con=$obj->connect();


$newid=$_GET['id'];

$query="SELECT * FROM users WHERE id='$newid'";
$result=mysqli_query($con,$query);
foreach($result as $one){
		echo '<tr>';
		echo'<td>'.$one['id'].'</td>';
		echo '<td>'.$one['name'].'</td>';
		echo '<td>'.$one['email'].'</td>';
		echo '<td>'.$one['gender'].'</td>';
		
		
		echo '</tr>';
	}




?>
</table>
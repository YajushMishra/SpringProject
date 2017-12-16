<?php
//db.php
//this file is used to create a class and link it to save database

class db{
		private $server;
		private $username;
		private $password;
		private $databse;
		
		//contructor
		public function __construct(){
			$this->server='localhost';
			$this->username='root';
			$this->password='';
			$this->database='final_project';
		}
		
			
		
		//database server connection 
		
public function connect(){
	$con=mysqli_connect($this->server,$this->username,$this->password,$this->database);
	return $con;
}
	//function to insert database
	public function savedata($con,$data,$pn,$pt){
		extract($data);
		$q=implode(',',$qua);
	    $query="INSERT INTO users(name,email,password,gender,address,qualification,photo_name,photo_type) VALUES('$fullname','$emailid','$password1','$gender','$address','$q','$pn','$pt')";
	     
		$result=mysqli_query($con,$query);
		return $result;
	}
	//to readdata from the database
	public function readdata($con){
		
		$query="SELECT * FROM users";//sql command to read all records
		$result=mysqli_query($con,$query);//this returns resource variable
		$no=mysqli_num_rows($result);
		if($no==0){
			return false;
		}else{
			while($row=mysqli_fetch_array($result)){
				$allrow[]=$row;
			}
		return $allrow;
		}
	}
	//delete record from the database table
	public function deletedata($con,$id){
		$query="DELETE FROM users WHERE id='$id'";
		$result=mysqli_query($con,$query);
		return $result;
	}
	public function login($con,$data){
		extract($data);
		$query="SELECT * FROM users WHERE email='$emailid' and password='$password1'";
		$result=mysqli_query($con,$query);
		$no=mysqli_num_rows($result);
		if($no==1)
			return true;
		else
			return false;
			
	}
	public function changepassword($con,$data,$sess_email)
	{
		extract($data);
		
	    $query="UPDATE users SET password='$new_pass' WHERE email='$sess_email'";
		
		
				//password confirmed
		$result=mysqli_query($con,$query);
		
		if($result){
			return true;
		}else{
			return false;
		}
	}
				

	
		
	
		
}
?>
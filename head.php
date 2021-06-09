<?php
	$name=$_GET['name'];
	$email=$_GET['email'];
	$phone=$_GET['phone'];
	$msg=$_GET['msg'];
	echo $name,$email,$phone,$msg;
	/*
	$con=mysqli_connect("localhost","root","","career");
	

	$sql="INSERT INTO query VALUES ('$name','$email','$phone','$msg')";

	if(mysqli_query($con,$sql))
	{
	     echo "Registration Done";
	}
	else
	{
		echo "not ";
	}
              mysqli_close($con);
              */
     ?>



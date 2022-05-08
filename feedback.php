<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="test1";

	

	$conn =mysqli_connect($server_name,$username,$password,$database_name)
	;

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	} 

	if(isset($_POST['submit']))
	{
		$sname = $_POST['sname'];
		$u_id = $_POST['u_id'];
		$semail = $_POST['semail'];
		$sphone = $_POST['sphone'];
		$feedback = $_POST['feedback'];
		

		$sql_query = "INSERT INTO feedback(sname,u_id,semail,sphone,feedback) VALUES('$sname','$u_id','$semail','$sphone','$feedback')";

		if (mysqli_query($conn,$sql_query))
		{
			echo "Thank you for sharing your feedback";
		}
		else
		{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		
		mysqli_close($conn);

	}

?>
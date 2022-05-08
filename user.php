<?php
    $sname = $_POST['sname'];
    $u_id = $_POST['u_id'];
    $semail = $_POST['semail'];
    $sphone = $_POST['sphone'];

    $con=new mysqli("localhost","root","","test1");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    }else {
        $stmt = $con->prepare("select * from entry_details where u_id =?");
        $stmt->bind_param("s",$u_id);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows >0){
            $data = $stmt_result->fetch_assoc();
            //print_r ($data);
            print_r( "Student ID :{$data['u_id']}  <br> ".
                 "Student NAME : {$data['sname']} <br> ".
                 "Book id : {$data['book_id']} <br> ".
	         "Book Name : {$data['book_name']} <br> ".
		 "Issue Date : {$data['date']} <br> ".
                 "--------------------------------<br>");

            
        }
    }

?>    
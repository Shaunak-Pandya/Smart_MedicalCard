<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        
        $id = $_POST['id'];
        $aadhaar = $_POST['aadhar'];
        echo $aadhaar;
        $f_name = $_POST['fname'];
        echo $f_name;
        $l_name = $_POST['l_name'];
		$email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO aadhaar_detail (id,aadhaar_id,f_name,l_name,email,mobile,dob,gender,address) values( ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql); 
		$q->execute(array($id,$aadhaar,$f_name,$l_name,$email,$mobile,$dob,$gender,$address));
		Database::disconnect();
		header("Location: user data.php");
    }
?>
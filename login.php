<?php

// Importing DBConfig.php file.
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$message = "Coba lagi";

if($username!=""){
    $CheckSQL = "SELECT * FROM guru where username='$username' AND password='$password'";

    // Executing SQL Query.
    $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
    
    if(isset($check)){
        $message = "login berhasil";
    }
    else{		
        $message ="Terjadi Kesalahan";
    }
}	
  
echo json_encode($message);




?>
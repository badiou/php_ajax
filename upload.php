<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "my_demo";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");

    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
    
    extract($_POST);
    
    if(mysqli_query($conn, "INSERT INTO contact_us(fname, lname, comment) VALUES('" . $fname . "', '" . $lname . "', '" . $comment . "')")) {
     echo '1';
     exit;
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
	 
?>
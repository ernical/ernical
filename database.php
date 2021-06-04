<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"db");
if(!$conn)  
        die("Connection failed".mysqli_connect_error());  
    else      
        echo "Successfully connected with database";  
?>

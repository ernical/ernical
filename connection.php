<?php  
    $servername = "localhost";  
    $username = "root";  //default user name is root  
    $password = "";     //default password is blank  
    $conn = mysqli_connect($servername, $username, $password);  
    if(!$conn)  
        die("Connection failed".mysqli_connect_error());  
    else      
        echo "Successfully connected with database";  
    $query = "CREATE DATABASE db";  
    if (mysqli_query($conn, $query)) {  
        echo "Database created successfully with the name db";  
    } else {  
        echo "Error creating database: " . mysqli_error($conn);  
    }  
    mysqli_close($conn);  
?>  
<?php      
    $host = "web-db";  
    $user = "MYSQL_USER";  
    $password = 'MYSQL_PASSWORD';  
    $db_name = "marketing"; 
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
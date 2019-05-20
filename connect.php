<?php  
       $servername = "localhost";  
       $username = "sanjana";  
       $password = "";  
       $conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
       $sql = mysql_select_db ('tutorial',$conn) or die("unable to connect to database"); 
?>   
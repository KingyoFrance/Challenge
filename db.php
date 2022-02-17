<?php
    $servername='sql11.freemysqlhosting.net';
    $username='sql11473567';
    $password='XjUX4CL5zR';
    $dbname = "sql11473567";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>

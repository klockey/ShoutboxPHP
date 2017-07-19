<?php
// connect to MysqlndUhConnection
//
//

$con = mysqli_connect("localhost","root","","shoutit");


// test connection
//
if (mysqli_connect_errno() ){
  echo 'Failed to connnect ' . mysqli_connect_error();
}

 ?>

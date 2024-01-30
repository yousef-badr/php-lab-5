<?php
include 'config.php';
mysqli_select_db( $conn,$dbname );
$sql = 'CREATE TABLE users( user_id INT NOT NULL AUTO_INCREMENT,
   username VARCHAR(20) NOT NULL,
   password  VARCHAR(20) NOT NULL,
   primary key ( user_id ))';
$retval = mysqli_query( $conn,$sql );
if(! $retval ) {
   die('Could not create table: ' . mysqli_error($conn));
}
echo "<br>Database Table  created successfully\n";
mysqli_close($conn);
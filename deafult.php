<?php 

include "conn.inc.php";

$id="01";
$username="username";
$pass="username";
$level="0";

$query ="INSERT INTO users VALUES('$id', '$username', '$pass', '$level')";
$result=mysqli_query($conn,$query);



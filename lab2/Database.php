<?php

use mysqli;
class Database{
public function _construct(){

$servername = "192.168.64.2";
$username = "tram";
$password = 
//$conn = mysqli_connect ($servername, $username, $password);
$conn = new mysqli($servername, $username, $password);
if (!$conn) {
//die("Connection failed: ". mysqli_connect_error());
die("Connection failed: ". $conn->connect_error());
}
echo "Connected successfully";
}

public function HelloWorld (){
echo "Hello World";
}
}

?>

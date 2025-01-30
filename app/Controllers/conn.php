<?php

$servername = "localhost";
$dbname = "id22356335_dyhecker";
$username = "id22356335_dyhecker";
$password = "Dyhecker@1234";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>
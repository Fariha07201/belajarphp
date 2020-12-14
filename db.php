<?php
$servername = "localhost";
$username = "root";
$password = "";
$namadb = "belajardatabase";

//create connetion
$conn = new mysqli ($servername,$username,$password,$namadb);

//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mahasiswa VALUES ('123','fariha','bogor')";

if ($conn->query($sql)){
    echo "Data sudah masuk ya";
}else{
    die("Error : " . $conn->connect_error);
}
?>
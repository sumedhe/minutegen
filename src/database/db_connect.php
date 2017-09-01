<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if (!$conn){
        die("Connection Failed :". mysqli_connect_error());
    } else {
    	echo "success!";
    }
?>

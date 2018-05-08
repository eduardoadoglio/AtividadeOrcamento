<?php

$conn = new mysqli('localhost', 'root', 'usbw');

if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

?>
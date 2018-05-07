<?php

$conn = new mysqli('localhost', 'root', 'usbw');

$sql = "INSERT INTO tb_funcionario VALUES (NULL, $nmfuncionario, $nmsenha)";




if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 

?>
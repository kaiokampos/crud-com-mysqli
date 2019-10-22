<?php 
//dfinindo local, usuário e senha
    $conn = mysqli_connect('localhost', 'root', '');
//selecionando a base de dados
    $banco = mysqli_select_db($conn, 'sistemaemp');
// definindo  tio de charset
    mysqli_set_charset($conn, 'utf8');
?>
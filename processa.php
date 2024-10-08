<?php
    include_once ("../conexao.php");

    $name = $_POST['cad_name'];

    $email = $_POST['email_cad'];

    $nascimento = $_POST['dt_cad'];

    $password = $_POST['password_cad'];

    $sql_cadastro = "INSERT INTO  tb_user (name,email,dt_nascimento,password) values ('$name','$email','$birth','$password')"; 

    $cadastro = mysqli_query($conector,$sql_cadastro);

    if(!isset($_SESSION)) {
        session_start();
    }

    header("Location: ../html/login.html");
?>
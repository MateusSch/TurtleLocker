<?php

include('conexao.php');


if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<script type='text/javascript'>
        alert('Preencha com seu e-mail');window.location
        .href='../login.html';</script>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<script type='text/javascript'>
        alert('Preencha com sua senha');window.location
        .href='../login.html';</script>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string(MD5($_POST['senha']));

        $sql_code = "SELECT * FROM assinaturas WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../locais.php");

        } else {
            echo"<script type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='../login.html';</script>";
        }
    }
}
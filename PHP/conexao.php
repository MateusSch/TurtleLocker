<?php

$mysqli = new mysqli("34.27.63.199","root","QN\TtL#T/+uJb9#J","usuarios");

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
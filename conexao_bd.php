<?php


$conexao = new mysqli("localhost", "root", "" , "coolpet");


if ($conexao->connect_error) {

echo "Erro ao conectar: " . $conexao->connect_error . "<br>";

}
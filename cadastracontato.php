<?php

$nome      = $_POST["nome"];
$email     = $_POST["email"];
$mensagem  = $_POST["mensagem"];
$data      = date("d/m/Y H:i:s");

$linha = $nome . ";" . $email . ";" . $mensagem . ";" . $data . PHP_EOL;

file_put_contents("contato.csv", $linha, FILE_APPEND);

header("Location: /sucesso.html");


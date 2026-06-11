<?php
require 'funcoesBD.php';

if (!empty($_POST['Nome']) && !empty($_POST['Nacionalidade']) && !empty($_POST['Posicao']) && !empty($_POST['Gols'])){

    $nome = $_POST['Nome'];
    $nacionalidade = $_POST['Nacionalidade'];
    $posicao = $_POST['Posicao'];
    $gols = $_POST['Gols'];

    inserirJogadores($nome, $nacionalidade, $posicao, $gols);


    
}

header('Location: index.php');
die();









?>
<?php

function ConectarBD(){
    $conexao = mysqli_connect("localhost", "root", "", "p2");
    return ($conexao);
}

function inserirJogadores($nome, $nacionalidade, $posicao, $gols){
    $conexao = ConectarBD();
    $consulta = "INSERT INTO jogadores(nome, nacionalidade, posicao, gols) VALUES('$nome', '$nacionalidade', '$posicao', '$gols')";
    mysqli_query($conexao, $consulta);
}

function visualizarJogadores()
{
    $conexao = conectarBD();
    $consulta = "SELECT * FROM jogadores";
    $listaJogadores = mysqli_query($conexao, $consulta);
    return $listaJogadores;
}









?>
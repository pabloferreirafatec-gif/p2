<?php
require 'funcoesBD.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2</title>
</head>
<body>
    <form method="POST" action="processamento.php">

        <input type="text" name="Nome" placeholder="Nome">
        <input type="text" name="Nacionalidade" placeholder="Nacionalidade">
        <input type="text" name="Posicao" placeholder="Posição">
        <input type="num" name="Gols" placeholder="Número de Gols">

        <button type="submit"> Enviar </button>
    <form>
    <?php
        $listaJogadores = visualizarJogadores();
        while($jogadores = mysqli_fetch_assoc($listaJogadores)){
            echo  $jogadores["nome"] . " " . $jogadores["nacionalidade"] . " " . $jogadores["posicao"] . " " . $jogadores["gols"] . " " . "<br>";
            
            



        }

    ?>









</body>
</html>
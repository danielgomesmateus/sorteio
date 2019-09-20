<?php
    require_once('src/controllers/SorteioController.php');
    
    $quantidadeDezenas = [6, 7, 8, 9, 10];
    $totalJogos        = 3;

    $sorteio = new SorteioController();
    $view    = $sorteio->gerar($quantidadeDezenas, $totalJogos);
?>
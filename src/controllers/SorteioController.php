<?php
    require_once(dirname(dirname(__FILE__)) . '/models/SorteioModel.php');

    class SorteioController {

        public function gerar($quantidadeDezenas, $totalJogos) {

            // Carrega o model
            $model   = new SorteioModel($quantidadeDezenas, $totalJogos);
            $sorteio = $model->conferirJogos(); 

            return $sorteio;
        }
    }
?>
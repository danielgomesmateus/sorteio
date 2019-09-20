<?php
    require_once(dirname(dirname(__FILE__)) . '/models/SorteioModel.php');
    require_once(dirname(dirname(__FILE__)) . '/views/SorteioView.php');
    
    class SorteioModel {
        
        private $quantidadeDezenas = [];
        private $resultado;
        private $totalJogos;
        private $jogos = [];

        public function __construct($quantidadeDezenas, $totalJogos) {
            
            $this->quantidadeDezenas = $quantidadeDezenas;
            $this->totalJogos        = $totalJogos;
        }

        public function __get($valor) {
            
            return $this->$valor;
        }

        public function __set($propriedade, $valor) {
            
            $this->$propriedade = $valor;
        }

        private function sortear(): Array {          

            $totalGerado = 0;

            foreach($this->quantidadeDezenas as $quantidadeDezena) {

                if($this->totalJogos > $totalGerado) {
                    
                    for($j = 0; $j < $quantidadeDezena; $j ++) {
                
                        $numeroGerado = rand(1, 60);
        
                        if(!(in_array($numeroGerado, $this->jogos))) {
                            
                            $this->jogos[$quantidadeDezena][] = $numeroGerado;
                        }
                    }

                    sort($this->jogos[$quantidadeDezena]); 
                    $this->jogos[$quantidadeDezena] = array_unique($this->jogos[$quantidadeDezena]);

                    $totalGerado ++;
                }
            }

            return $this->jogos;
        }

        public function quantidadeJogos(): Array {

            return $this->sortear();
        }

        public function gerarSorteio(): Array {

            $this->totalJogos = 6;
            return $this->sortear();
        }

        public function conferirJogos() {
            
            // Gera os jogos
            $jogos = $this->quantidadeJogos();
            //$jogos = $this->gerarSorteio();

            // Carrega a view
            $view    = new SorteioView();
            $sorteio = $view->conferirJogos($jogos);  

            return $sorteio;
        }
    }
?>
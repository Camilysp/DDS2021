<?php

class Carro {
    public $cor;
    public $qtd_porta;
    public $velocidade_max;
    public $velocidade_atual = 0;

    public  function acelerar ($aceleracao,$tempo){
        $this ->velocidade_atual =
            $this ->velocidade_atual + $aceleracao*$tempo;
    }
    
    public function frear ($aceleracao,$tempo){
        $this ->velocidade_atual =
            $this ->velocidade_atual + $aceleracao*$tempo;
    }

}

?>
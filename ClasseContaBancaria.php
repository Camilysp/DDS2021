<?php

class ContaBancaria{

    public $nome;
    public $agencia;
    public $numeroConta;
    public $saldo = 0;
    public $operacao;

    public function sacar($valor){
            $this ->saldo = $this ->saldo - $valor;
    }

    public function depositar($valor){
            $this ->saldo = $this ->saldo+$valor;
    }

    public function transferir(){

    }
    
    public function exibe_dados_conta(){
        $operacao["cc"] = "Conta Corrente";
        $operacao["cp"] = "Conta Poupança";
        echo "<h1>Conta de: <b>". $this->nome."</b></h1>";
        echo "Agência: ".$this->agencia."<br />";
        echo "Conta: ".$this->numeroConta."<br />";
        echo "Operação: ".$operaçao[$this->operacao]."<br />";
        echo "Saldo: ".$this->saldo."<br />";
    }
}

?>
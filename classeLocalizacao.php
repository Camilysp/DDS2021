<?php

class Localizacao{

    public $id_localizacao;
    public $endereco;
    public $cep;
    public $cidade;
    public $estado;
    public $id_pais;

    public function __construct($valores){
        $this->id_localizacao = $valores ["id_localizacao"];
        $this->endereco = $valores ["endereco"];
        $this->cep = $valores ["cep"];
        $this->cidade = $valores ["cidade"];
        $this->estado = $valores ["estado"];
        $this->id_pais = $valores ["id_pais"];
    }

    public function exibir(){
        echo "<b>Id da localização: </b>$this->id_localizacao<br />";
        echo "<b>Endereço: </b>$this->endereco<br />";
        echo "<b>CEP: </b>$this->cep<br />";
        echo "<b>Cidade: </b>$this->cidade<br />";
        echo "<b>Estado: </b>$this->estado<br />";
        echo "<b>Id do país: </b>$this->id_pais<br />";
        echo "<br />";
    }

}

?>
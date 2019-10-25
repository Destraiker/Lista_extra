<?php
/**
  * 
  */

include __DIR__.'/Produto.php';

 class ClassName extends Produto{
 	Private $marca;
 	Private $volume;
 	Private $dataValidade;

 	function __construct($preco,$marca,$volume,$dataValidade)
 	{
 		if($preco!=Null && $marca!=Null && $volume!=Null && $dataValidade!=Null){
 			$this->marca = $marca;
 			$this->volume = $volume;
 			$this->dataValidade = $dataValidade;
 			$this->preco = $preco;
 		}else{
 			echo throw new Exception("InformaçãoNulaException", 1);
 			
 		}
 		
 	}

 	function getPreco() {
        return $this->marca;
    }

    function setPreco($marca) {
        $this->marca = $marca;
    }
    function getPreco() {
        return $this->volume;
    }

    function setPreco($volume) {
        $this->volume = $volume;
    }
    function getPreco() {
        return $this->dataValidade;
    }

    function setPreco($dataValidade) {
        $this->dataValidade = $dataValidade;
    }

 	function getPreco() {
        return $this->preco;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }
 	
 } 
?>
<?php
/**
  * 
  */

include __DIR__.'/Produto.php';

 class DVD extends Produto{
 	Private $titulo;
 	Private $ano;

 	function __construct($preco,$titulo,$ano)
 	{
 		if($preco!=Null && $titulo!=Null && $ano!=Null){
 			$this->titulo = $titulo;
 			$this->ano = $ano;
 			$this->preco = $preco;
 		}else{
 			echo throw new Exception("InformaçãoNulaException", 1);
 		}
 	}

 	function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    function getAno() {
        return $this->ano;
    }

    function setAno($ano) {
        $this->ano = $ano;
    }
 	function getPreco() {
        return $this->preco;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }
 	
 } 
?>
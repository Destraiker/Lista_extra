<?php
 /**
  * 
  */
 include __DIR__.'/Conexao.php';

 abstract class ClassName extends Conexao{

 	Private $preco;

 	abstract function getPreco();

    abstract function setPreco($preco);
 	
 }
?>
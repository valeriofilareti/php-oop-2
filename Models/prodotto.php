<?php

class Prodotto {
  public $nome;
  public $prezzo;
  public $categoria;

  function __construct($_nome, $_prezzo, $_categoria){
    $this->nome = $_nome;
    $this->prezzo = $_prezzo;
    $this->categoria = $_categoria;
  }

  public function getNome(){
    return $this-> nome;
  }

}
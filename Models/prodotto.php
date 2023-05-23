<?php

class Prodotto {
  public $img;
  public $nome;
  public $prezzo;
  public $categoria;

  function __construct($_img, $_nome, $_prezzo, $_categoria){
    $this->img = $_img;
    $this->nome = $_nome;
    $this->prezzo = $_prezzo;
    $this->categoria = $_categoria;
  }

  public function getNome(){
    return $this-> nome;
  }

}
<?php

class Prodotto {
  public $nome;
  public $prezzo;
  public $marca;

  function __construct($_nome, $_prezzo, $_marca){
    $this->nome = $_nome;
    $this->prezzo = $_prezzo;
    $this->marca = $_marca;
  }

  public function getNome(){
    return $this-> nome;
  }

}
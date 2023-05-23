<?php 
require_once __DIR__ . '/prodotto.php';

class cibo extends prodotto {
  public $peso;

  function __construct($_nome, $_prezzo, $_categoria, $_peso){
    parent::__construct($_nome, $_prezzo, $_categoria);
  }
}
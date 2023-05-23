<?php 
require_once __DIR__ . '/prodotto.php';

class giochi extends prodotto {
  public $materiale;

  function __construct($_nome, $_prezzo, $_categoria, $_materiale){
    parent::__construct($_nome, $_prezzo, $_categoria);
  }
}
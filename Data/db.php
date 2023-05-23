<?php

require_once __DIR__ . '/../Models/prodotto.php';
require_once __DIR__ . '/../Models/giochi.php';
require_once __DIR__ . '/../Models/cibo.php';

$prods = [

  $croccantini = new cibo('img', 'croccantini', '10', 'cane', '1kg'),
  $scatoletta = new cibo('img','scatoletta', '13', 'cane', '1.5kg'),
  $topo = new giochi('img', 'Topo di Gomma', '3.50', 'gatto', 'gomma'),

]

?>


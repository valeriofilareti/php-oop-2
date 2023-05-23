<?php

require_once __DIR__ . '/../Models/prodotto.php';
require_once __DIR__ . '/../Models/giochi.php';
require_once __DIR__ . '/../Models/cibo.php';



  $prod1 = new prodotto('prod1', '10', 'cane');
  $prod2 = new giochi('prod2', '13', 'cane', 'gomma');
  $prod3 = new cibo('prod3', '18', 'gatto', '1kg');



<?php
require_once __DIR__ . '/../Models/prodotto.php';
require_once __DIR__ . '/../Data/db.php';
?>

<div class="container">
  <h1><?php echo $prod1 -> nome  ?></h1>
  <h3><?php echo $prod1 -> prezzo ?></h3>
  <h3><?php echo $prod1 -> categoria ?></h3>
</div>
<div class="container">
  <h1><?php echo $prod2 -> nome  ?></h1>
  <h3><?php echo $prod2 -> prezzo ?></h3>
  <h3><?php echo $prod2 -> categoria ?></h3>
  <h3><?php echo $prod2 -> peso ?></h3>
</div>

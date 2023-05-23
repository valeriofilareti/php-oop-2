<?php
require_once __DIR__ . '/../Models/prodotto.php';
require_once __DIR__ . '/../Data/db.php';
?>

<div class="container d-flex">

  <?php foreach ($prods as $prod) : ?>
  <div class="card m-3" style="width: 18rem;">
    <img src="../img/topogiocattolo.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title"> <?php echo $prod -> nome ?></h4>
      <h5 class="card-text"><?php echo $prod -> categoria ?></h5>
      <?php if($prod -> peso) : ?>
      <h5 class="card-text"><?php echo $prod -> peso ?></h5>
      <?php endif; ?>
      <?php if($prod -> materiale) : ?>
      <h5 class="card-text"><?php echo $prod -> materiale ?></h5>
      <?php endif; ?>
      <h5 class="card-text"><?php echo $prod -> prezzo ?></h5>

    </div>
  </div>
  <?php endforeach; ?>


</div>


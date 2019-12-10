<?php include '../header.php';
$page = 'Exercice 4';
?>
<?php
$initialNumber = 1;
echo 'Number =' . $initialNumber . '<br>';
while($initialNumber <= 10){ ?>
  <p>Incrémentation = <?php $initialNumber ?></p>
  <?php  $initialNumber = $initialNumber += ($initialNumber / 2);
}
?>
<?php include '../footer.php'; ?>
<!-- Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer de la moitié de sa valeur -->

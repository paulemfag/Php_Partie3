<?php include '../header.php';
$page = 'Exercice 4';
?>
<p>
<?php
$initialNumber = 1;
echo 'Number =' . $initialNumber . '<br>';
while($initialNumber <= 10){
  $initialNumber = $initialNumber + ($initialNumber / 2);
  echo 'Number = ' . $initialNumber . '<br>';
}
?>
</p>
<?php include '../footer.php'; ?>
<!-- Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

l'afficher
l'incrementer de la moitié de sa valeur -->

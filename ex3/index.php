<?php
include '../header.php';
$page = 'Exercice 3';
$n1 = 100;
$n2 = 10;
do {
  $multiplication = $n1 * $n2;
  echo $multiplication;
  $n1--;
} while ($n1 > 10);
?>
<p><?= $multiplication ?></p>
<?php include '../footer.php'; ?>

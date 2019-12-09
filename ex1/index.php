<?php
$page = 'Exercice 1';
include '../header.php';
?>
<p><?php
  $variable = 0;
  while ($variable <= 10) {
    echo $variable . ' , ' . $variable++;
  }
?></p>
<?php
include '../footer.php'; ?>

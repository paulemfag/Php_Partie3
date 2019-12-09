<?php
include '../header.php';
$page = 'Exercice 2';
$number = 0;
$numbertwo = 10;
?>
<p><?= $number * $numbertwo ?></p>
<?php $number++ ?>
<p><?= $number * $numbertwo ?></p>
<?php include '../footer.php'; ?>

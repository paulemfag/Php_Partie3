<?php
include '../header.php';
$page = 'Exercice 5';
?>
<?php
$loop = 1;
$text = 'on y arrive presque';
echo $loop . $text;
while ($loop < 15) {
  $loop++;
  echo $loop . $text . '<br>';
}
?></p>
<?php
include '../footer.php';
?>

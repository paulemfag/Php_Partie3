<?php
include '../header.php';
$page = 'Exercice 6';
?>
<p>
<?php
$number = 21;
$text = 'C\'est presque bon';
while ($number > 0) {
  $number--;
  echo $number . $text . '<br>';
}

?>
</p>
<?php
include '../footer.php';
?>

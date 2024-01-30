
<?php
$a = -5;

if ($a > 0) {
    echo "$a adalah bilangan bulat positif.";
} elseif ($a < 0) {
    echo "$a adalah bilangan negatif.";
} else {
    echo "$a adalah bilangan cacah.";
}

if ($a % 3 === 0) {
    echo " $a adalah kelipatan tiga.";
} else {
    echo " $a bukan kelipatan tiga.";
}
?>


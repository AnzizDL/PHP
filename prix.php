<?php
const TVA=0.2;
$prixHT=200; 
$prixTTC=($prixHT * TVA) + $prixHT;
echo "Le prix TTC est de $prixTTC euros.";
?>


<?php 

echo "<h1>Créer une fonction calculant le carré d'un nombre</h1>";

$nbr = 0;
function Square($nbr){
    return $nbr*$nbr;
}

echo 'Le carré de '.$nbr.' est '.square($nbr).'<br>';

echo "<h1>Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle</h1>";


$l = 0;
$L = 0;

function areaRect($l, $L){
    return $l*$L;
}

echo 'L\'air d\'un rectangle de largeur '.$l.' et de longueur '.$L.' est de '.areaRect($l, $L).'cm² <br>'; 

$Pi = 3.14159265358979323846264338327950288419716939937510582;
$r = 0; 

function areaCircle($r, $Pi){
    return round($Pi*($r*$r), 2);
}

echo 'L\'air d\'un cercle de rayon '.$r.' est de '.areaCircle($r, $Pi).'cm² <br>';

echo "<h1>Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.</h1>";

$taux = 0;
$price = 0;

function TTC($price, $taux){
    return $price +($price*($taux/100));
}

echo 'Le prix TTC d\'un article coutant '.$price.' Euro et ayant comme taux '.$taux.' % est de '.TTC($price, $taux).' Euro.<br>';

echo "<h1>Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)</h1>";

$taux = 0;
$price = 0;
$Taxe = 'HT';

function Taxe($price, $taux, $Taxe){
    if ($Taxe == 'TTC') {
        return $price +($price*($taux/100));
    } else if ($Taxe == 'HT') {
        return ($price *100/(100+ $taux));
    } else {
        return $price;
    }
}

Echo 'Le prix de l\'article '.$Taxe.' est de '.Taxe($price, $taux, $Taxe).' Euro <br>';

?>

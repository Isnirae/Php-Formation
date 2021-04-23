<?php 

//Comme sur JS, on peut fair des calculs en PHP
$number1 = 10;

//J'affiche le resultat d'un calcul
echo 'Le resultat de '.$number1.' + 5 est ' .($number1 + 5);

//Opérateur d'incrémentation
echo $number1 += 3; //$number1 vaut 13 jusqu'a la fin du script

echo $number1; // Affiche toujours 13
echo '<br /> --------------------- <br />';
echo $number1 ** 2; // Affiche 13 x 13
echo $number1; // Affiche encore 13
echo '<br /> --------------------- <br />';

//On peut écrire des conditions en PHP
$a = 42;
$condition = 0 === false; // On stock le résultat de la comparaison strice entre 0 et false

if ($a === 0) {
    echo 'A vaut 0';
}   else if ($a > 12 && $a <= 42) {
    echo 'On entre dans le 1er else if';
}   else if ($condition) { // $condition doit être true
    echo 'On est dans le dernier else if';
}   else {
    echo 'Aucun if n\'est ok';
}

echo '<br /> --------------------- <br />';

if (!$condition){ // On peut aussi ecrire $condition === false
    echo 'S\'affiche si la variable $condition est false';
}

echo '<br /> --------------------- <br />';

//Priorité des opérateurs logiques
$a = true;
$b = true;
$c = true;

//On voudrait que si $a est false, tout le if est false

// true || true && false => true || false => true
// (true || true) && false => true && false => false
if ($a || $b && $c){
    echo 'OK';
}

echo '<br /> --------------------- <br />';

//On a possibilité d'incrémenter ou de décrémenter via un raccourcie
$a = 0;

echo ++$a; // $a vaut 1 et on affiche 1;
echo $a++; // $a vaut 2 et on affiche 1;

?>
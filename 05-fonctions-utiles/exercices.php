<?php 
echo "<h1>Mettre la date du jour</h1>";

echo 'Nous somme le '.date('l d/m/Y').' et il est '.date('H').'H'.date('i').'min et '.date('s').' secondes.<br>';

echo "<h1>Recupérer le jour qu'il sera dans dix jour</h1>";

echo 'Dans dix jour nous serons le '.date('l d/m/Y', strtotime('+ 10 days'));

echo "<h1>Combien de jour reste il avant Noel ?</h1>";

echo 'Il reste '.(-date('z')+date('z', strtotime('25 december'))).' jour avant noel <br>';

// On récupère le timstamp de maintenant et de noel 2021
$npw = time(); // ou strtotime('now')
$christmas = strtotime('25 december 2021');

//Calcule des jours restants
$days = $christmas - $now;
$days = $days / 86400; // 60seconde * 60 minute * 24 heure

echo 'Il reste '.round($days, 2).' jours avant Noel';

?>
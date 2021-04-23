<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            echo '<h2>1. Ecrire une boucle qui affiche les nombres de 10 à 1</h2>';

            echo '<ul>';
            for ($i = 10; $i >= 0 ; $i--) {
                echo "<li>$i</li>" ;
            }
            echo '</ul>';

            echo '<h2>2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100</h2>';

            for ($i =1 ; $i <= 100; $i++ ){
                if ($i % 2 === 0) {
                    echo $i.' - ';
                }
            }

            echo '<h2>3. Ecrire le code permettant de trouver le PGCD de 2 nombres</h2>';
            $a = 150;
            $b = 7485;

            while ($b !== 0) 
            { 
            $r = $a % $b; 
            $a = $b; 
            $b = $r; 
            } 
            echo $a; 
               
            echo '<h2>4. Coder le jeu du FizzBuzz</h2>';
            for ($fb = 1; $fb <= 100; $fb++) {
                if ($fb % 15 == 0) {
                    echo 'FizzBuzz'.' - ';
                } elseif ($fb % 3 == 0) {
                    echo 'Fizz'.' - ';
                } elseif ($fb % 5 == 0) {
                    echo 'Buzz'.' - ';
                } else {
                echo $fb.' - ';
                }
            }
            
            echo '<h2>5. Créer une boucle qui affiche 10 étoiles (*)</h2>';
            for ($i=1 ; $i<=10 ; $i++) {
                echo '⭐';
            }

            echo '<h2>6. Imbriquer la boucle dans une autre boucle afin d\'afficher 10 lignes de 10 étoiles</h2>';
            for ($d=1 ; $d<=10 ; $d++) {
                echo "<br/>";
                for ($i=1 ; $i<=10 ; $i++) {
                    echo '⭐';
                }
            }

            echo '<h2>7. Nous obtenons un carré. Trouver un moyen de modifier le code pour obtenir un triangle rectangle.</h2>';
            $h= 10;
            for ($i = 0; $i < $h; $i++)
            {for($x = 0 ; $x <= $i ; $x++ ){
            echo "⭐";}
            echo "<br />";
            }
            
            echo '<h2>8. Afficher la table de multiplication du chiffre 5</h2>';
            $r = 0;
            for($m = 1; $m <= 10; $m++){
                $r++;
                echo '5 x '.$m.' = '.($r*5).'<br/>';
            }

            echo '<h2>9. 2. Afficher l\'ensemble des tables de multiplications de 1 à 10.</h2>';
            for($r=1; $r <=10; $r++){
                echo '<h2>Table de '.$r.'</h2> ';
            for($m = 1; $m <= 10; $m++){
                echo $r.' x '.$m.' = '.($m*$r).'<br/>';
            }}

            echo '<h2>10.Grâce aux boucles et un peu d\'HTML, essayez de reproduire ce tableau :</h2>';
            
            echo '<table cellspacing="0"><tbody>';
            //Ici, on affiche la premiere ligne (la légende)
                echo '<tr>';
                    echo '<td class="border-bottom border-right light-grey"><strong>x</strong></td>';
                    for ($i = 0; $i <= 10; $i++){
                        //On vérifie si on doit metre le gris clair sur la case
                        if($i % 2 !==0){
                        echo '<td class="border-bottom light-grey"><strong>'.$i.'</strong></td>';
                    } else {
                        echo '<td class="border-bottom"><strong>'.$i.'</strong></td>';
                    }
                }
                echo '</tr>';
            //Ici, on va afficher les resultats des tables de multiplication
            for($table=0; $table <=10; $table++){
                echo '<tr>';

                //Ici, c'est la première colone de chaque ligne qui représente la table
                if ($table % 2 !==0){
                echo '<td class="border-right light-grey"><strong>'.$table.'</strong></td>';
                } else {
                echo '<td class="border-right"><strong>'.$table.'</strong></td>';
                }

                for($m = 0; $m <= 10; $m++){
                    //Conditions pour gérer le fond de couleur des cases
                    if ($table === $m){
                    echo '<td class="dark-grey">'.($table*$m).'</td>';
                } else if ($table % 2 === 0 && $m % 2 ===0){ //Si le multiple est pair et la table est pair
                    echo '<td class="light-grey">'.($table*$m).'</td>';
                } else if ($table % 2 !== 0 && $m % 2 !== 0){ //Si le multiple est impaire et la table est impaire
                    echo '<td class="light-grey">'.($table*$m).'</td>';
                } else {
                    echo '<td>'.($table*$m).'</td>';
                }
                }

                echo '</tr>';
            }
            echo '<tbody></table>';

    ?>

    <style>
    .light-grey{
        background-color: #d3d3d3;
    }

    .dark-grey{
        background-color: #6d6d6d;
    }

    table{
        border: 1px solid #000;
    }

    .border-right{
        border-right: 1px solid #000;
    }

    .border-bottom{
        border-bottom: 1px solid #000;
    }

    td{text-align: center;
    width: 25px;
    height: 25px;}</style>
</body>
</html>
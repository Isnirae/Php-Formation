<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercice 1</h2>
    <?php 
    
    $capitales = [
                'France' => 'Paris',
                'Espagne' => 'Madrid',
                'Italie' => 'Rome',
    ];
    
                foreach($capitales as $pays => $capitale) { ?>
                    <li>La capital de <?=$pays ?> est <?= $capitale ?></li>
                <?php }     
    ?>
<h2>Exercice 2</h2>

<?php

$population = [
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
];

foreach($population as $pays => $pop){
    if ($pop > 20000000) {echo '<li>'.$pays.'</li>';}};

?> <br> <br> <?php

$total = 0;

foreach($population as $pays => $pop){
   $total += $pop;
};
echo 'La population total d\'Europe est de '.($total-$population['Mexique']);
?>
<h2>Exercice 3</h2>

<?php 
$eleves = [
    0 => [
        'nom' => 'Matthieu',
        'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 18, 12, 15, 13, 7]
    ],
    2 => [
        'nom' => 'Jean',
        'notes' => [17, 14, 6, 2, 16, 18, 9]
    ],
    3 => [
        'nom' => 'Enzo',
        'notes' => [1, 14, 6, 2, 1, 8, 9]
    ]
];

foreach($eleves as $eleve){
    echo $eleve['nom'].' a eu ';

    //On fait une boucle pour afficher chacunes des notes 
    foreach($eleve['notes'] as $index => $note){
        echo $note;
        
            //Si l'index de la note est égal au nombre de note - 1
            //On est sur la derniere note
            if ($index === count($eleve['notes']) - 1) {
                echo '.';
            } else if ($index === count($eleve['notes'])- 2){
                echo ' et ';   
            } else {
                echo ', ';
            }
        }
    echo '<br>';
}

echo '<br>';

//Parcourir les notes et faire la somme
$somme = 0;
//Je récupére les notes de Jean
$notes = $eleves[2]['notes'];

foreach($notes as $note) {
    $somme += $note;
}

echo 'La moyenne de Jean est '.round($somme / count($notes ), 2);

echo '<br>';

$ontLamoyenne = 0;
foreach ($eleves as $eleve) {
    //Calculer la moyenne
    $somme = 0;
    $notes = $eleve['notes'];

    foreach ($notes as $note) {
        $somme += $note;
    }
    $moyenne = round($somme / count ($notes), 2);
    echo 'La moyenne de '.$eleve['nom'].' est '.$moyenne.'<br>';

    //On verifie si l'éléve qu'on parcours al a moyenne 
    if ($moyenne >= 10) {
        echo $eleve['nom'].' a la moyenne <br/>';
        $ontLamoyenne++; //On incrémente le compteur de personne ayant la moyenne
    } else {
        echo $eleve['nom'].' n\' a pas la moyenne <br/>';
    }
}

echo 'Nombre d\'éléves avec la moyenne : '.$ontLamoyenne;

echo '<br>';
echo '<br>';

//On doit d'abord parcourir chaque note pour découvrir la meilleur note
$bestNote = -1; 
foreach ($eleves as $eleve){
    foreach ($eleve['notes'] as $note){
        if ($note > $bestNote){ //On cherche la meilleure note en parcourant chaque note
            $bestNote = $note;
        }
    }
}
//On parcours chaque élève pour savoir qui a eu cette note

foreach ($eleves as $eleve) {
    foreach($eleve['notes'] as $note) {
        if ($note === $bestNote) {
            echo $eleve['nom'].' a la meilleure note: '.$bestNote.'<br>';
            break; //Evite le soucis d'un élève qui a plusieurs fois la meilleur note,
            //on arrête le foreach au moins une fois la meilleur note. 
        }
    }
}

echo '<br>';

$aeu20 = false;

foreach ($eleves as $eleve){
    foreach ($eleve['notes'] as $note){
            if($note === 20){
                $aeu20 = true;
                break; //On peu faire un break dés qu'on tombe sur un 20
            }
    }}

    if ($aeu20){
        echo 'Quelqu\'un a eu 20';
    } else {
        echo 'Personne n\'a eu 20';
    }

?>
</body>
</html> 
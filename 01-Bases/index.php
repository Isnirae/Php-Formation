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
        //L'instruction echo permet d'afficher du texte
        echo 'Hello PHP';
        
        echo '<br /> Je fais du PHP';

        //Si on a des quotes dans une chaine, on doit les échapper
        echo '<br/> L\'HTML dans le PHP';

        //On peut declarer des variables en php
        $age = 31 ;
        $mon_age = 31;

        //Je vais afficher le contenue de ma variable
        echo '<br / > J\'ai ' .$age. ' ans';

        //En Php, il existe l'interpolation de variables
        //Quand on utilise les doubles quotes, on n'a pas besoin de concaténer
        echo "<br /> J'ai $age ans.";

        
    ?>

</body>
</html>
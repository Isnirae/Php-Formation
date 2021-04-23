<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>Toto Titi</h1>
        <ul>
            <li>18, rue de la Paix, Paris</li>
            <li>17, avenue du Palais, Cambrai</li>
        </ul>
    </div>

    <div>
        <h1>Tata Titi</h1>
        <ul>
            <li>18, rue de la Paix, Paris</li>
        </ul>
    </div>

    <?php
        //Les tableaux en PHP
        //Un tableau simple contient des chaines
        $contacts = ['Toto titi', 'Tata titi'];

        // Afficher Tata Titi
        echo '<h2>Le contact sur l\'index 1</h2>';
        echo $contacts[1];

        //On peut parcourir un tableau

        // <?= équivaut à <?php echo
        // <?php $contact;

        //Pour stocker des données plus "complexes", on peut utiliser un tableau multidimensionnel
        //Un tableau peut contenir N dimensions
        //Ici, on en a 3: Les contacts, le contact, les adresses.
        $contactMultis = [
            [
            'nom' => 'Titi', 
            'prenom' => 'Toto', 
            'adresse' => 
                ['18, rue de la Paix, Paris',
                 '17, avenue du Palais, Cambrai']
            ],
            [
            'nom' => 'Titi', 
            'prenom' => 'Tata', 
            'adresse' => 
                ['18, rue de la Paix, Paris']
            ]
        ];
    ?>
    <h2>Afficher le prénom et le nom du second contact</h2>
    <?php echo $contactMultis[1]['prenom'].' '.$contactMultis[1]['nom']; ?>
    
    <h2>Afficher la première adresse de Toto Titi</h2>
    <?php echo $contactMultis[0]['adresse'][0];?>

    <h2> La liste des contacts dans le tableau multidimensionnel </h2>
    <?php foreach($contactMultis as $contact) { ?>

        <div>
            <h1 class="blue"><?= $contact['prenom']; ?></h1>
            <ul>
            <?php foreach ($contact['adresse'] as $adresse) { ?>
                <li><?= $adresse; ?></li>
            <?php } ?>
            </ul>
        </div>

    <?php } ?>
</body>
</html>
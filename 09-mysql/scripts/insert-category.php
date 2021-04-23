<?php

/**
 * Le but de ce script est de remplir la BDD avec des catégories.
 * Le sript vide la base et la re-remplit pour repartir au propre.
 */

 // J'inclus la connexion à la base de données
 require __DIR__.'../config/database.php';

 // Les catégories a ajouté en BDD
$categories = ['Films de gangsters', 'Action', 'Horreur', 'Science-fiction', 'Thriller'];


// On va vider la table avant de la remplir
// On désactiver temporairement la vérification des clés étrangères
$db->query('SET FOREIGN_KEY_CHECKS = 0');
$db->query('TRUNCATE category');
$db->query('SET FOREIGN_KEY_CHECKS = 1');


foreach($categories as $category) {
    $db->query("INSERT INTO category (name) VALUES ('$category')");
    echo "INSERT INTO category (name) VALUES ('$category')";
    echo "<br>";
}

//"INSERT INTO category (name) VALUES ('Films de gangsters')";


?>


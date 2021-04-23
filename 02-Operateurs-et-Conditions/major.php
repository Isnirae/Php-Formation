<?php

$age = 16;

if ($age >=18){
    echo 'Vous pouvez entrer';
} else {
    echo 'INTERDIT';
}

echo '<br /> --------------------- <br />';

if ($age >= 16 && $age < 18) {
    echo 'Vous êtes presque majeur';
} else if ($age >=14 && $age <16 ){
    echo 'Vous êtes jeune';
} else if ($age <14) {
    echo 'Vous êtes trop jeune';
} else {
    echo 'Vous êtes majeur';
}

echo '<br /> --------------------- <br />';

if ($age >=18){
    echo 'Vous pouvez entrer';
} else if ($age >= 16 && $age < 18){
    echo 'Vous êtes presque majeur';
} else if ($age >=14 && $age <16 ){
    echo 'Vous êtes jeune';
} else {
    echo 'Vous êtes trop jeune';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Calculator</title>
</head>
<body>
<div class="container">

    <?php 
        $number1 = $_GET['number1'] ?? '';
        $number2 = $_GET['number2'] ?? '';
        $operator = $_GET['operator'] ?? '';
    ?>

    <form action="" method="get">
        <label for="number1">Nombre 1 :</label>
        <input type="text" name="number1" id="number1" class="form-control" value="<?= $number1 ?>">
            <br>
            <label for="operator">Opérateur : </label>
            <select class="form-select" name="operator" id="">
                <option value="">--Pick an operator--</option>
                <option value="+">addition</option>
                <option value="-">soustraction</option>
                <option value="*">multiplication</option>
                <option value="/">division</option>
            </select>
            <br>
        <label for="number2">Nombre 2 :</label>
        <input type="text" name="number2" id="number2" class="form-control" value="<?= $number2 ?>">

        <button type="submit" class="btn btn-primary">Calculer</button>
    </form>

    <?php 
        if (!empty($_GET) && $operator!='') { //On vérifie que le formulaire est soumis
            if(is_numeric($number1) && is_numeric($number2)) {
            //Ici, on fait le calcul
            if ($operator === '+') {
                $result = $number1 + $number2 ;
            } else if ($operator === '-') {
                $result = $number1 - $number2 ;
            } else if ($operator === '*') {
                $result = $number1 * $number2 ;
            } else if ($operator === '/' && $number2 != 0) {
                $result = $number1 / $number2 ;
            } else {
                $result = '??';
                echo 'Attention, on ne peut pas diviser par 0.   <br>';
            }

            echo "Le résultat de $number1 $operator $number2 = ".$result;
            } else {
                echo "Vous devez utiliser des chiffres.";
            } 
    } 
    ?>

</div>
</body>
</html>
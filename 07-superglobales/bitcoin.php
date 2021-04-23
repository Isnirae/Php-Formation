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
        <br>

        <?php
        $amount = (int) $_POST['amount'] ?? null; // null ou '' fait à peu près la même chose
        $currency = $_POST['currency'] ?? '';
        ?>

        <form action="" method="post">
            <label for="amount">Montant</label>
            <input type="text" name="amount" id="amount" class="form-control">

            <label for="currency">Devise</label>
            <select name="currency" id="currency" class="form-select">
                <option value="eur">€ to bitcoins</option>
                <option value="bit">bitcoins to €</option>
            </select>

            <br>

            <button class="btn btn-primary">Convertir</button>
        </form>

        <?php
        if (!empty($_POST)) { //Verifie que le formulaire est soumis
            $rate = 42106.19;
            if ($currency === 'eur') {
                $result = number_format($amount / $rate, 6); // 1euro vaut 0.000024 bitcoins
                if ($result > 1) {
                    $result = round($result, 2);
                    echo "$amount euros valent $result bitcoins.";
                } else {
                    echo "$amount euros valent $result bitcoin.";
                }
            } else if ($currency === 'bit') {
                $result = $amount * $rate;
                if ($result > 1 && $amount > 1) {
                    echo "$amount bitcoins valent $result euros.";
                } else if ($result > 1 && $amount <= 1) {
                    echo "$amount bitcoin vaut $result euros.";
                } else {
                    echo "$amount bitcoin valent $result euro.";
            }}}
        ?>

    </div>
</body>

</html>
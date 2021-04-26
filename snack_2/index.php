<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <?php
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
    ?>

    <p>Il mio nome è <?php echo $name ?></p>
    <p>Il mio indirizzo mail è <?php echo $mail ?></p>
    <p>La mia età è <?php echo $age ?></p>

    <?php
    if (strlen($name) <= 3) {
        echo "Accesso negato";
    }
    else { echo "Accesso riuscito"; }
    ?>

    <?php
    if (is_numeric($age)) {
        echo "Accesso riuscito";
    }
    else { echo "Accesso negato"; }
    ?>

    <?php
    $needle = stripos($mail, '@');
    $needle2= stripos($mail, '.');

    if ($needle === false || $needle2 === false) {
        echo "Accesso negato";
    }
    else { echo "Accesso riuscito"; }
    ?>



</body>
</html>
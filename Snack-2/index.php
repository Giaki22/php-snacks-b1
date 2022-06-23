<?php

$name = $_GET["userName"];
$mail = $_GET["userMail"];
$age = $_GET["userAge"];
$age = filter_var($age, FILTER_VALIDATE_INT);
var_dump($name, $mail, $age)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <?php if(strlen($name) > 3 && str_contains($mail, '.', '@') && is_numeric($age)) { ?>
        <?php echo "<h1>Accesso Riuscito</h1>" ?>
    <?php } else { ?>
        <?php echo "<h1>Accesso Negato</h1>" ?>
    <?php } ?>
</body>
</html>
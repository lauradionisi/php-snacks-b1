<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <?php

        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if(empty($name) && empty($mail) && empty($age)) {
           echo "campo vuoto";
        }
        else {
            if (strlen($name) < 4) {
                echo 'nome troppo corto';
            }
            else {
                echo 'nome corretto';
            }
            echo '<br>';
            if (strpos($mail, '@') && strpos($mail, '.')) {
                echo 'mail corretta';
            }
            else {
                echo "mail non corretta";
            }
            echo '<br>';
            if (is_numeric($age)) {
                echo "età accettata";
            }
            else {
                echo "formato età errato";
            }          
        }


            // if (strlen($name) < 4 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age) {
            //  echo 'accesso riuscito';

            // }
            //  else {
            //      echo 'accesso negato';
            //  }


    ?>
</body>
</html>
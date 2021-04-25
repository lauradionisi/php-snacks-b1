<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <?php

        $matches = [
            'match1' => [
                'Olimpia Milano' => '10',
                'Cantù' => '15'
            ],
            'match2' => [
                'Virtus' => '30',
                'Fortitudo' => '15'
            ],
            'match3' => [
                'Reyer' => '50',
                'New Basket' => '65'
            ],
            'match4' => [
                'Polisportiva Dinamo' => '45',
                'Victoria Libertas' => '35'
            ],
        ];
        
    
        $keys = array_keys($matches);
        for($i = 0; $i < count($matches); $i++) {
          
            foreach($matches[$keys[$i]] as $key => $value) {
                echo $key . " - " . $value . "<br>";         
            }          
        }
        
    ?>
</body>
</html>
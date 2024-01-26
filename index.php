<?php

    function createPassword($num) {

        $lower_char = 'abcdefghijklmnopqrstuvwxyz';
        $upper_char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $spec_char = '.-@,;:*';
        $all_char = $lower_char.$upper_char.$spec_char;

        $password = '';

        for($i=0; $i<$num; $i++) {
            $password .= $all_char[rand(0, strlen($all_char)-1)];
        }
        
        return $password;
    }

    if(isset($_GET['psw_len'])){

        $psw_len = (int)$_GET['psw_len'];
        $new_pass = createPassword($psw_len);
        var_dump($new_pass);

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <div class="container my-4">
        <h2>Inserisci la lunghezza della tua password:</h2>
        <form action="index.php" method="GET">
                <div class="col-6">
                    <div class="mb-3">
                        <input type="number" class="form-control" id="psw_len" name="psw_len"
                            placeholder="">
                    </div>
                    <button type="submit" class="btn btn-success">Invia</button>
                </div>
        </form>
    </div>

</body>

</html>
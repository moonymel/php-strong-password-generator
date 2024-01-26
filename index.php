<?php 
    include __DIR__.'/partials/functions.php';
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
        <div class="my-3">           
            <?php echo isset($_GET['psw_len']) ? 'La tua password generata: '.$new_pass : ' ' ?>
        </div>
    </div>

</body>

</html>
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php</title>
</head>
<body>
    <h1>FORM</h1>
    <form action="form.php" method="GET">
        <div class="mb-3">
            <label for="inputTesto" class="form-label">testo</label>
            <input type="text" class="form-control" id="inputTesto" name="testo">
        </div>
        <div class="mb-3">
            <label for="inputparola" class="form-label">parola da censurare</label>
            <input type="text" class="form-control" id="inputparola" name="parolaCensura">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
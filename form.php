<?php
$testo = $_GET['testo'];
$censura = $_GET['parolaCensura'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>risultato form php</title>
</head>
<body>
    <h1>testo: <?php echo $testo?></h1>
    <h2>lunghezza: <?php echo strlen($testo)?> </h2>
    <h2>testo censurato: <?php echo str_replace($censura, '*#@!', $testo)?></h2>
</body>
</html>
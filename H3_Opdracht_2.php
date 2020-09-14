<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$bomen = array("boom_19.jpg", "boom_69.jpg", "boom56.jpg");

foreach ($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}

?>
<br>

<a href="Hoofdstuk_2.php">Terug naar vorige pagina.</a>
</body>
</html>
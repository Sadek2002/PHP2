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
    <style>
        body {
            text-align: center;
        }
        .rood {
        border:red solid 3px;
        }
        .groen {
            border:green solid 3px;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i<=9 ;$i++) {
    if ($i % 2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo "<img ".$class. "src='img/apen/aap".$i.".jpg'>";
}
?>
<br>

<a href="Hoofdstuk_2.php">Terug naar vorige pagina.</a>
</body>
</html>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Table de multiplication</title>
</head>
<body>
    <?php
    $chiffre = 7;
    ?>
    <h1>La table de <?php echo $chiffre; ?></h1>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $i * $chiffre;
        echo "$chiffre * $i = $resultat<br>";
    }
    ?>
</body>
</html>
<?php
$prenom = "Bill";
$classe = 'B1SIO2';
$langages = array('C#', 'PHP', 'HTML', 'CSS', 'JavaScript');
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>La page de <?php echo $prenom; ?></title>
</head>
<body>
    <?php
    $nbLangages = count($langages);
    $experience = "débutant";
    if (($nbLangages >= 3) && ($nbLangages <= 4)) {
        $experience = "débrouillé";
    }
    elseif ($nbLangages > 4) {
        $experience = "aguerri";
    }
    ?>
    <h1>Ma présentation</h1>
    <p>Bonjour, je m'appelle <?php echo "$prenom" ?> et je suis en <?php echo "$classe" ?>.</p>
    <?php
    echo 'Je suis un programmeur ' . $experience . '. ';
    echo 'Je connais ' . $nbLangages . ' langages de programmation :</p>';
    ?>
    <ul>
        <?php
        foreach ($langages as $langage) {
            echo "<li>$langage</li>";
        }
        ?>
    </ul>
</body>
</html>
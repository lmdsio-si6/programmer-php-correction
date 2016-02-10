<?php
$clients = array(
    array('Nom' => 'Zette', 'Prenom' => 'Annie', 'Ville' => 'Paris'),
    array('Nom' => 'Créyon', 'Prenom' => 'Mina', 'Ville' => 'Lyon'),
    array('Nom' => 'Gator', 'Prenom' => 'Ali', 'Ville' => 'Marseille')
    );
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Liste des clients</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste des clients</h1>
    <table>
        <thead>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
        </thead>
        <?php foreach ($clients as $client) { ?>
        <tr>
            <td><?php echo $client['Nom']; ?></td>
            <td><?php echo $client['Prenom']; ?></td>
            <td><?php echo $client['Ville']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
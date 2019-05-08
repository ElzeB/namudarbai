<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų dasrbas PHP7</title>
</head>

<body>

<?php

    $cities3=['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
 ?>

    <ul>
        <?php
        for ($i = 0; $i < count($cities3); $i++){
        echo "<li>$cities3[$i]</li>";
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($cities3 as $miestas) {
            echo $miestas. '<br>';
        }

        ?>
    </ul>

</body>

</html>

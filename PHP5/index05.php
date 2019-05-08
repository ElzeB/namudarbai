<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namu darbai PHP5</title>
</head>

<body>
    <?php

    $cities3=[
        'Tokijas'=> ['13.6', '1868', 'Japonija'],
        'Vašingtonas'=> ['0.6', '1790', 'JAV'],
        'Maskva'=> ['11.5', '1147', 'Rusija'],
        ];

    print_r($cities3);

    $cities3 ['Londonas'] = ['8.6', '43', 'Anglija'];
    print_r($cities3);

    ?>

    <ul>
        <?php

        echo "<li>Gyventojų skaičius: {$cities3['Londonas'][0]}</li>";
        echo '<br>';
        echo "<li>Įkurtas: {$cities3['Londonas'][1]}</li>";
        echo '<br>';
        echo "<li>Šalis: {$cities3['Londonas'][2]}</li>";

        ?>
    </ul>

</body>

</html>

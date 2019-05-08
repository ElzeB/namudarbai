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

    $cities3 ['Londonas'] = ['8.6', '1643', 'Anglija'];

    echo '<br>';

    $metai = 1774;

    if ($metai>=$cities3['Vašingtonas'][1]) {
        echo "Vašingtonas yra JAV sostinė?";
    } elseif ($metai==1774) {
        echo "JAV sostinė vis dar Filadelfijoje";
    } else {
        $result = $cities3['Vašingtonas'][1] - $metai;
        echo "Liko $result metai (-ų) iki Vašingtono įkūrimo";
    }

?>

</body>

</html>

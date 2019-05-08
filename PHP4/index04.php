<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namu darbai PHP4</title>
</head>

<body>
<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    print_r($cities);

    echo '<br>';

    $cities[] = 'Tokijas';
    print_r($cities);

    echo '<br>';

    $cities2 = [

        'Tokijas' => '13.6',
        'Vašingtonas' => '0.6',
        'Maskva' => '11.5',
    ];
     print_r($cities2);

    echo '<br>';

    $cities2['Londonas'] = '8.6';
    print_r($cities2);

    ?>

    <ul>
        <li><?php echo $cities[1];?></li>
    </ul>

    <ul>
         <?php foreach ($cities2 as $gyventojai){
    echo "<li>Gyventojų skaičius: $gyventojai </li>";
            } ?>
    </ul>

</body>

</html>

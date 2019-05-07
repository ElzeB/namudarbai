<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>

<body>
    <?php

     $šalis = 'Lietuva';
     $miestas = 'Vilnius';
     $populiacija = 574221;

     ?>

        <ul>
            <li><?php echo $šalis; ?></li>
            <li><?php echo $miestas; ?></li>
            <li><?php echo $populiacija; ?></li>
        </ul>

    <p><?php echo $miestas .'- Lietuvos sostinė' ?></p>
    <p><?php echo "$miestas ir $šalis sparčiai auga"; ?></p>

    <?php

    $x = 10;
    $y = 7;

     ?>

    <?php $z = $x+$y;?>
    <p><?php echo "$x+$y = $z";?></p>

    <?php $z = $x-$y;?>
    <p><?php echo "$x-$y = $z";?></p>

    <?php $z = $x*$y;?>
    <p><?php echo "$x*$y = $z";?></p>

    <?php $z = $x/$y;?>
    <p><?php echo "$x/$y = $z";?></p>

    <?php $z = $x%$y;?>
    <p><?php echo "$x%$y = $z";?></p>

</body>

</html>


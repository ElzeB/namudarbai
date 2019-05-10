<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų darbas PHP10</title>
</head>

<body>
    <?php

    function staciakampio_plotas($ilgis, $plotis){
        $plotas = $ilgis*$plotis;
        echo "Stačiakampio plotas: $plotas";
    }
    staciakampio_plotas (5,10);

    ?>

</body>

</html>

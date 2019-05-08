<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų dasrbas PHP7</title>
</head>

<body>
<?php

    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $dienu_skaicius = count($temp);//30
    $tem_suma = array_sum($temp);//474
    $tem_vid = round ($tem_suma/$dienu_skaicius);
    echo "Vidutinė mėnesio temperatūra $tem_vid";

    echo '<br>';


   $šilčiausios_temp = asort($temp);
   echo $šilčiausios_temp;
?>

</body>

</html>

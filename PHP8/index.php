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

    $dienu_skaicius_int = count($temp);//30
    $tem_suma_int = array_sum($temp);//474
    $tem_vid_int = round ($tem_suma_int/$dienu_skaicius_int);
    //print_r($tem_vid_int);//
    echo "Vidutinė mėnesio temperatūra $tem_vid_int";

    echo '<br>';

    rsort($temp);
    //print_r($temp);//
    $penki_šilčiausi_array = array_slice($temp, 0, 5);
   //print_r($penki_šilčiausi_array);//
    $penki_šalčiausi_array = array_slice($temp, -5, 5);
    //print_r($penki_šalčiausi_array);//

     echo '<br>';

     echo 'Penkios šilčiausios balandžio mėn temp. ' . implode(' ', $penki_šilčiausi_array);

     echo '<br>';

     echo 'Penkios šalčiausios balandžio mėn temp. ' . implode(' ', $penki_šalčiausi_array);

?>

</body>

</html>

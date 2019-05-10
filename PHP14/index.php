<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų darbai PHP14</title>
</head>

<body>
    <?php

    $sukurimoMetai = 2001;
    $dabartiniaiMetai = date('Y');

    if ($sukurimoMetai < $dabartiniaiMetai) {
          echo "&copy; $sukurimoMetai - $dabartiniaiMetai";
    }
     else {
         echo "&copy; $dabartiniaiMetai";
     }
    ?>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų darbai PHP12</title>
</head>

<body>

<?php
    if(isset($_POST['mygtukas'])){
        if($_POST['vardas'] && $_POST['pavarde']){
            echo 'Jūsų vardas: ' .$_POST['vardas'] .'<br>' . 'Jūsų pavardė: ' .$_POST['pavarde'];
                }else{
                    echo 'Įveskite visus parametrus';
                }
    } else { ?>
        <form action = "<?php $_PHP_SELF; ?>"; method="post">
            <p> Įveskite vardą: <input type="text" name="vardas"></p>
            <p> Įveskite pavardę: <input type="text" name="pavarde"></p>
            <input type="submit" value="Submit" name="mygtukas">
        </form>
   <?php } ?>

</body>

</html>

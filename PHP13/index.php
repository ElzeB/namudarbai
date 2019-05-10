<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų darbai PHP13</title>
</head>

<body>

<?php

    class Vaikai {
        public $vardas;
        public $pavarde;

        public function labas() {
            return 'Labas, mano vardas <i>' .$this -> vardas. '</i>, mano pavardė ' .$this -> pavarde. '<br>';
         }
     }

    $Juozapas = new Vaikai();
    $Vyte = new Vaikai();

    $Juozapas -> vardas = "Juozapas";
    $Juozapas -> pavarde = "Vainauskas";


    $Vyte -> vardas = "Vytė";
    $Vyte -> pavarde = "Vainauskaitė";

    echo $Juozapas -> labas();
    echo $Vyte -> labas();

?>

</body>

</html>

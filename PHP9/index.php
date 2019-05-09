<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namų darbai PHP9</title>
</head>

<body>
    <?php

     $ceu = array( "Italija"=>"Roma", "Liuksemburgas"=>"Liuksemburgas", "Belgija"=> "Briuselis", "Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis", "Prancūzija" => "Paryžius", "Slovakija"=>"Bratislava", "Slovenija"=>"Liublijana", "Vokietija" => "Berlynas", "Graikija" => "Atėnai", "Airija"=>"Dublinas", "Nyderlandai"=>"Amsterdamas", "Portugalija"=>"Lisabona", "Ispanija"=>"Madridas", "Švedija"=>"Stokholmas", "Didžioji_Britanija"=>"Londonas", "Kipras"=>"Nikosija", "Lietuva"=>"Vilnius", "Čekija"=>"Praha", "Estija"=>"Talinas", "Vengrija"=>"Budapeštas", "Latvija"=>"Ryga", "Malta"=>"Valeta", "Austrija" => "Viena", "Bulgarija" => "Sofija", "Rumunija" => "Bukareštas", "Lenkija"=>"Varšuva");
    // print_r($ceu);//
    ?>

    <ul>
        <?php

        asort($ceu);
       foreach ($ceu as $valstybe => $sostine) {
           echo "<li>$sostine</li>"; }

        echo '<br>';

        foreach ($ceu as $valstybe => $sostine) {
           echo "<li>$valstybe</li>"; }

        ?>

    </ul>



</body>

</html>

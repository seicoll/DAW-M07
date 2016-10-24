<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>

<body>
    <?php
        $jugadors_de_lacrosse = array( "Billy Bitter", "Chris Bocklet", "Jeremy Boltus" );
        $jugadors_de_pilota_basca = array( "Iñaqui" );
        
        $esports = array();
        $esports["Lacrosse"] = $jugadors_de_lacrosse;
        $esports["Pilota Basca"] = $jugadors_de_pilota_basca;
        
        foreach( $esports as $esport => $jugadors ) {
            echo "Els meu jugadors preferits de $esport són: <br>" ;
            //aquí va un altre foreach que et deixo per a tu!!
            //foreach( $jugadors as ...
            foreach ($jugadors as $jugador) {
            //o bé foreach ($jugadors as $clau => $jugador) {
                echo "$jugador <br>";
            }
            
            echo "<br>";
        }
            
    ?>
           
</body>
</html>
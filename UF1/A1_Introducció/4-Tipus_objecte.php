<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Tipus objecte</title>

</head>

<body>
    <?php
        $d = new DateTime();
        $tipus_de_d = gettype( $d );
        echo "La variable \$d 
              conté el valor " . $d->format( "d/m/Y") .
              " i és del tipus $tipus_de_d";
    
        //5.Prova a modificar el codi per a intentar mostrar $d tal com ho feiem a
        //l'exercici anterior. És a dir echo "el valor de \$d és $d"; Ha funcionat?
        
        echo "<br>";
        //echo "La variable \$d conté els valor $d";
        
        //6. Seria interessant, ara que sabem que la variable és de tipus objecte, 
        //conèixer de quina classe és aquell objecte. Això ho podem fer amb la 
        //funció get_class(). Una pista: $classe_de_d = get_class( $d );
        
        echo "<br>";
        $classe_de_d = get_class ($d);
        echo "L'objecte \$d és de la classe $classe_de_d";  //És de classe DateTime
    ?>
           
</body>
</html>
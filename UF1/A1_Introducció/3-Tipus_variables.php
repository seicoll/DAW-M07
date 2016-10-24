<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Pràctica hello world</title>

</head>

<body>
    <?php
        $i = 12;
        $tipus_de_i = gettype( $i );
        echo "La variable \$i 
              conté el valor $i 
              i és del tipus $tipus_de_i<br>";
              
        $a = "Hola";
        $tipus_de_a = gettype( $a );
        echo "La variable \$a 
              conté el valor $a 
              i és del tipus $tipus_de_a<br>";
              
        $b = 10.5;
        $tipus_de_b = gettype( $b );
        echo "La variable \$b 
              conté el valor $b 
              i és del tipus $tipus_de_b<br>";
              
        $c = true;
        $tipus_de_c = gettype( $c );
        echo "La variable \$c 
              conté el valor $c 
              i és del tipus $tipus_de_c<br>";
              
    
        //Tipus de gettype
        echo "El tipus del valor que retorna gettype és " . gettype(gettype( $c ));
    ?>
   
</body>
</html>
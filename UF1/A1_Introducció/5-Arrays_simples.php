<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Arrays</title>

</head>

<body>
    <?php
        // creo un array amb 3 elements
        $a = array( 5,7,11);
        print_r( $a );
        echo "<br>";
        
        //afegeixo més elements a l'array
        $a[] = 13;  
        $a[] = 17;
        print_r( $a );
        echo "<br>";
        
        //encara un altre
        array_push ($a, 23);
        print_r( $a );
        echo "<br>";
        
        //pinto elements de l'array
        echo "El valor del terce relement de l'array és " . $a[2];
        echo "<br>";
        
        unset($a[0]); //destruim el primer element
        unset($a[1]); // el valor 7 seguia a la possició 1
        print_r( $a );
        echo "<br>";
        
        
        //1. Quina és la instrucció a PHP per a crear un array?
        $a2 = array(1,2,3);
        
        //2.Es pot crear un array buit a PHP ó sempre s'hi han de posar valors a la creació?
        $a_buit = array();
        print_r( $a_buit);
        echo "<br>";
        
        //3. Si li prengutem el tipus a l'array amb la funció gettype(), quin tipus obtenim?
        echo "L'array \$a és de tipus " . gettype( $a );
        echo "<br>";
        
        //4. Com puc fer per afegir un element a l'array a partir de la darrera posició 
        //coneguda? Esmenta dues maneres diferents.
        $a[] = 25;
        array_push($a, 26);
        print_r ( $a );
        echo "<br>";
        
        //5. Com s'accedeix a un element d'un array?
        echo "Accedim element amb clau " . $a[2];
        
        //6.Com s'esborra un element d'un array?
        unset ($a[0]);
        
        //7. Fixat que el valor 7, emmagatzemat a la posició $a[1], segueix exactament 
        //a la mateixa posició després d'esborrar $a[0]. Això no seria així en 
        //altres llenguatges de programació, però a PHP els arrays, realment, 
        //són mapes ordenats. Farem el següent exercici per comprendre aquest concepte.
    
    ?>
           
</body>
</html>
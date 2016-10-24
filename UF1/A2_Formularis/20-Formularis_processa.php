<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularis</title>
</head>

<body>
    <h1>Formularis</h1>
    
    <?php
       // 2. Mitjançant la funció print_r( $variable ) analitza el contingut de la 
       // variable $_REQUEST. Diferencia el contingut de les variables que contenien 
       // corxets amb les que no.
       
       echo "<pre>";
       
       print_r($_REQUEST);
       
       echo "</pre>";
       
       // 3. Pinta camp a camp les dades rebudes. Hi haurà camps que podràs pintar 
       // directament (Ex: echo "El valor de text és " . $_REQUEST["mytext"]; ) 
       // Altres valors, els que són un array, els hauràs de recorrer tal com s'ha 
       // treballat en exercicis d'arrays
       
            //Blucle extern (els paràmetres rebuts del formulari)
            foreach ($_REQUEST as $clau => $valor) {
                
                echo "Clau: $clau <br/>";
                
                $es_array = (gettype ($valor) == "array");
                
                if ($es_array) {
                    //Bucle intern (un dels paràmetres és un array i cal recorre'l)
                    foreach ($valor as $v) {
                        echo "$v, ";
                    }
                    
                } else {
                    echo "Valor: $valor";
                }
                
                echo "<br/>";
                echo "<br/>";
            }
       
    ?>
           
</body>
</html>
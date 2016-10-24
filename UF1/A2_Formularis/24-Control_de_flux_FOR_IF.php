<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Pràctica escriu frase n vegades</title>
    </head>
    <body>
        
    <?php
    
    $rebo_dades= array_key_exists("laMevaFrase",$_REQUEST) &&
                 array_key_exists("elMeuNumero",$_REQUEST);
    
    $numero_es_valid = $rebo_dades &&
                       is_numeric( $_REQUEST['elMeuNumero'] ) && 
                       ( $_REQUEST['elMeuNumero'] % 2 == 0 )
                       ;
    
    if (! $rebo_dades || ( $rebo_dades && ! $numero_es_valid ) ) {
    
       $frase = "";
       if ( $rebo_dades && ! $numero_es_valid ) {
           $frase = $_REQUEST["laMevaFrase"];
           echo "Noi!! Aquest programa només funciona amb números parells";
       }
    
    ?>
    
        <form method="get" action="">
            Frase: <input type="text" name="laMevaFrase"  value="<?php echo $frase ?>" />
            Número: <input type="text" name="elMeuNumero"/>
            <input type="submit" value="Submit"/>
        </form>    
    <?php 
    } else {
        $metode = $_SERVER['REQUEST_METHOD'];
        echo "He rebut les dades via $metode<br>";
        for ($i = 0; $i < $_REQUEST['elMeuNumero']; ++$i ) {
            $frase  = $_REQUEST['laMevaFrase'];
            echo "$frase<br>";
        }    
    }
    ?>
    </body>
</html>
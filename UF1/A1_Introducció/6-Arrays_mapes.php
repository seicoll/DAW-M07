<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Arrays</title>

</head>

<body>
    <?php
        $m = array( "Alibaba" => "y los quarenta ladrones",
                    "Harry Potter" => "y el cáliz de fuego");
        
        //afegim un element més
        $m["Aníbal"] = "El caníbal";
        
        //mostrem *tot* el contingut de l'array
        print_r($m);
        print "<br>";
        
        //Accedim a un element (mostrem només un element)
        print( $m["Alibaba"]);
        print "<br>";
        
        //Esborrem un element
        unset( $m["Harry Potter"]);
        
        //mostrem *tot* el contingut de l'array
        print_r($m);
        print "<br>";
        
        
        //1. Després de l'execució d'aquest codi, quines claus conté l'array?
        //Alibaba i Aníbal
        
        
        //2. Quin valor li correspon a cada clau?
        //[Alibaba] => y los quarenta ladrones 
        //[Aníbal] => El caníbal 
        
        
        //3. Com es fa per afegir un nou parell clau-valor a l'array?
        $m["Nova clau"] = "Nou valor";
        print_r($m);
        
        //4. Com es fa per accedir a un valor mitjançant la seva clau?
        print "<br>";
        print $m["Nova clau"];
    
        //5.Com s'esborra una entrada clau-valor?
        unset ($m["Nova clau"]);
        
    ?>
           
</body>
</html>
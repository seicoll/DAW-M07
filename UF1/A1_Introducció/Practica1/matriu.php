<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Matriu</title>
</head>

<body>
    <h1>Matriu</h1>
    
    <?php
        
        //GENERAR MATRIU
        function generarMatriu ($num) {
         //Comprovem si reben un array
         if (!is_int($num))
         {
             echo "El paràmetre no és un número <br/>.";
             return false;
         }
         else {
             
             for ($fila = 0; $fila<=$num; $fila++) {
                for ($col = 0; $col<=$num; $col++) {
                     if ($fila<$col)
                     {
                         //Sobre diagonal
                         $m[$fila][$col] = $fila+$col;
                     }
                     elseif ($fila == $col) {
                         //Diagonal
                         $m[$fila][$col] = "*";
                     } 
                     elseif ($fila>$col)
                     {
                         //Sobre diagonal
                         $m[$fila][$col] = rand(10,20);
                     }
                }
             } 
             
             return $m;
         }
       };
       
       //MOSTRAR MATRIU
       function mostrarMatriu($m)
       {
           echo "<table style='border:solid 1px black'>";
           $num = count($m[0]);
           
           for ($fila=0; $fila<$num;$fila++)
           {
               echo "<tr>";
               
               for ($col=0;$col<$num;$col++)
               {
                   echo "<td>" . $m[$fila][$col]. "</td>";
               }
               
               echo "</tr>";
           }
           echo "<table/>";
       }
       
       
       //TRASPOSAR MATRIU
       function trasposarMatriu($m)
       {
           for ($fila=0; $fila<count($m);$fila++)
           {
               for ($col=0;$col<count($m[0]);$col++)
               {
                  $mtrasposta[$col][$fila] = $m[$fila][$col];
               }
           }
           return $mtrasposta;
       }
       
       
       $matriu = generarMatriu(3);
       
       if ($matriu) {
           echo "<p>Matriu generada:<p/>";
           mostrarMatriu($matriu);
           echo "<p>Matriu trasposta:<p/>";
           mostrarMatriu(trasposarMatriu($matriu));
           
       }
    ?>
           
</body>
</html>
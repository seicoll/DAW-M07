<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>

<body>
    <h1>Factorial d'un array</h1>
    
    <?php
        //Funció recursiva
        /*
        function factorial($n) {
            if (!is_int($n))
                throw "S'ha d'entrar un nombre";
            if ($n === 1)
                return 1;
            return $n * factorial($n - 1);
        }
        */
        
        //Funció sense recursivitat
        function Factorial($n){
            $fact=1;
            for ($i=1; $i<=$n;$i++)
                {
                    $fact *= $i;  //$fact = $fact * $i;
                }
            return $fact;
        }
    
    
       function FactorialArray ($a) {
         //Comprovem si reben un array
         if (!is_array($a))
         {
             return false;
         }
         else {
             //recorrem l'array
             foreach ($a as $value) {
                 //Comprovem que el valor és un enter
                 if (!is_int($value))
                 {
                     return false;
                 }
                 else {
                     $fact[]=Factorial($value);
                     
                 }
             }
             
             return $fact;
         }
           
       };
       
       
       echo "Cria a la funció FactorialArray([3,5,8])<br/>";
       $a = [3,5,8];
       $factorial = FactorialArray($a);
       if ($factorial) {
           echo "<pre>";
           print_r($factorial);
           echo "</pre>";
       }
       else
       {
           echo "El paràmetre no és un array o algun dels seus valdors no és un nombre.";
       }
       
       
       
    ?>
           
</body>
</html>
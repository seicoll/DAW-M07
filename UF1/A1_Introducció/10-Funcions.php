<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Funcions</title>
</head>

<body>
    <h1>Parell o senar</h1>
    
    <?php
       include '10-funcio.php';

       
       $i=5;
       
       if ( es_parell($i) ) {
          echo "$i és parell";
       } else {
          echo "$i és senar";
       }
       
    ?>
           
</body>
</html>
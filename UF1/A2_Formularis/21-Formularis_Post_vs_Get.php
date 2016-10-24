<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularis</title>
</head>

<body>
    <div style="margin: 30px 10%;">
    <h3>My form</h3>
    <form action="21-Formularis_Post_vs_Get.php" method="post" id="myform" name="myform">

        <label>Text</label> <input type="text" value="" size="30" maxlength="100" name="mytext" id="" /><br /><br />
    
        <input type="radio" name="myradio" value="1" /> First radio
        <input type="radio" checked="checked" name="myradio" value="2" /> Second radio<br /><br />
    
        <input type="checkbox" name="mycheckbox[]" value="1" /> First checkbox
        <input type="checkbox" checked="checked" name="mycheckbox[]" value="2" /> Second checkbox<br /><br />
    
        <label>Select ... </label>
        <select name="myselect" id="">
            <optgroup label="group 1">
                <option value="1" selected="selected">item one</option>
            </optgroup>
            <optgroup label="group 2" >
                <option value="2">item two</option>
            </optgroup>
        </select><br /><br />
    
        <textarea name="mytextarea" id="" rows="3" cols="30">
            Text area
        </textarea> <br /><br />
    
        <button id="mysubmit" type="submit">Submit</button><br /><br />

    </form>
    
    <?php
    //1. A l'exercici PHP - Treball senzill amb formularis substitueix el mètode 
    //POST per el GET i investiga que passa

    //El resultat és que trobem a la url tots els paràmetres i valors del formulari.
    
    //2. Un cop fetes varies proves, passa a afinar el codi que processa les dades 
    //canviat $_REQUEST per $_GET o $_POST segons el cas.

    //Veiem que la variable $_REQUEST conté un agregat de tots els valors que arriben 
    //ja sigui via POST o via GET. Si volem accedir només a un conjunt d’aquests
    // valors farem servir $_GET o $_POST segons convingui

        echo "<pre>";
       
        if (!empty($_POST)){
            print_r($_POST);
        }
       
        echo "</pre>";
    
    ?>
</div>
           
</body>
</html>
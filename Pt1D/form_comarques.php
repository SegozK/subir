<?php
$nom=$_GET["nom"];
$cognoms=$_GET["cognoms"];

include('dades_comarques.php');
echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>');
echo('<h2 class="p-4">Benvingut '.$nom.' '.$cognoms.' !</h2>');

echo('<h1 class="p-4">CONSULTA DADES PER COMARQUES</h1>');
echo('<form method="get" class="p-4" action="comarques_ctl.php">');
echo('Comarques: <select name="comarca" class="form-label">');
foreach($dades_comarques as $comarca => $value) {

        $comarca = htmlspecialchars($comarca); 
        if($comarca=='Vallès Oriental'){
            echo('<option value="'.$comarca.'" selected>'.$comarca.'</option>');
        }else{
            echo '<option value="'. $comarca .'">'. $comarca .'</option>';
        }
        
        
    }
echo('</select>');
?>
<input type="hidden" name="nom" value="<?php echo $nom; ?>">
<input type="hidden" name="dadescomarques" value="<?php echo $dades_comarques; ?>">
<input type="hidden" name="cognoms" value="<?php echo $cognoms ?>">
<br><br>
<input type="checkbox" name="ch">Mostrar totes les comarques</input>
<!--<input type="checkbox" name="ch">
<label for="ch" name="ch" class="form-label">Mostrar totes les comarques:</label>-->
<br><br>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php

echo ('<a class="p-4" href="../view/menu.php?nom='.$nom.'&cognoms='.$cognoms.'">Tornar</a><br><br></form>');

?>
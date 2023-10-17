<?php
$nom=$_GET["nom"];
$cognoms=$_GET["cognoms"];

include('dades_valles_oriental.php');
echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>');
echo('<h2 class="p-4">Benvingut '.$nom.' '.$cognoms.' !</h2>');

echo('<h1 class="p-4">CONSULTA DADES VALLÈS ORIENTAL</h1>');
echo('<form method="get" class="p-4" action="valles_oriental_ctl.php">');
echo('Municipi: <select name="municipi" class="form-label">');
echo('<option value="tots" selected>Mostrar Tots</option>');
foreach($dades_valles_oriental as $municipi => $value) {
            echo '<option value="'. $value[0] .'">'. $value[0] .'</option>';
    }
echo('</select>');
?>
<input type="hidden" name="nom" value="<?php echo $nom; ?>">
<input type="hidden" name="cognoms" value="<?php echo $cognoms ?>">
<br><br>
<br><br>
<button type="submit" class="btn btn-primary">Consultar</button>
</form>

<?php

echo ('<a class="p-4" href="../view/menu.php?nom='.$nom.'&cognoms='.$cognoms.'">Tornar</a><br><br></form>');

?>
<?php
$nom=$_GET["nom"];
$cognoms=$_GET["cognoms"];
$pobles= $_GET["municipi"];
include('dades_valles_oriental.php');

?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
<?php echo('<h2 class="p-4">Benvingut '.$nom.' '.$cognoms.' !</h2>');?>
    <h1>Valores recibidos:</h1>
    <ul>
        <?php
            if ($pobles == "tots"){
                echo ('<h4>Mostrant les dades demografiques de tots els pobles</h4>');
                echo ('<ul>');
                foreach($dades_valles_oriental as $id => [$poble, $value]) 
                {
                    echo '<li>'. $poble .': '. $value .' hab.</li>';
                }
                echo ('</ul>');
            } else{
                foreach($dades_valles_oriental as $id => [$poble, $value]) 
                {
                    if ($poble == $pobles){
                        echo ('<p>El poble del '.$poble.' té '.$value.' habitants</p>');
                    }
                }
            
            }

            echo ('<br><a class="" href="../view/menu.php?nom='.$nom.'&cognoms='.$cognoms.'">Inici</a><br><br></form>');
        ?>
    </ul>
    
</body>
</html>
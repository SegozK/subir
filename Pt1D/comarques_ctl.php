<?php
$nom=$_GET["nom"];
$cognoms=$_GET["cognoms"];
$comarca= $_GET["comarca"];
include('dades_comarques.php');

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
            if(isset($_GET["ch"])) {
                // Tu código para el caso en que "ch" está marcado
                foreach($dades_comarques as $comarca => $value) {
                    echo '<li>'.$comarca.': '.$value.' hab.</li>';
                }
            } else {
                // Tu código para el caso en que "ch" no está marcado
                foreach($dades_comarques as $comarca2 => $value) {
                    if ($comarca2 == $comarca) {
                        echo '<li>La comarca '.$comarca.' té '.$value.' habitants</li>';
                    }
                }
            }

            echo ('<br><a class="" href="../view/menu.php?nom='.$nom.'&cognoms='.$cognoms.'">Inici</a><br><br></form>');
        ?>
    </ul>
    
</body>
</html>
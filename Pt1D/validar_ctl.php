<?php
$dnivalid=['10000000A', '20000000B', '30000000C'];
$dni=$_POST["dni"];
$nom=$_POST["nom"];
$cognoms=$_POST["cognoms"];
$valid=false;

for ($i=0; $i < count($dnivalid) ; $i++) { 
    if($dni==$dnivalid[$i]){
        $valid=true;
    }
}
if (!$valid) {
    echo '<p>DNI no vàlid</p><br><a href="./">Torna</a>';
}else{
    header('Location: ./menu.php?nom='.$nom.'&cognoms='.$cognoms);
}

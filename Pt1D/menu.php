<?php
$nom=$_GET["nom"];
$cognoms=$_GET["cognoms"];
echo('<h1>Benvingut '.$nom.' '.$cognoms.' !</h1>');
echo('<a href="./form_comarques.php?nom='.$nom.'&cognoms='.$cognoms.'">Dades per comarques</a><br>');
echo('<a href="./form_valles_oriental.php?nom='.$nom.'&cognoms='.$cognoms.'">Dades del Vallès Oriental</a><br><br>');
echo('<a href="../">Inici</a>');
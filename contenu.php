<?php
//Récupération du fichier JSON
$content = file_get_contents('todolist.json');
// Transformer le resultat sous forme de tableau
$str = json_decode($content,true);
?>
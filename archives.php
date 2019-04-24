<?php
// Se lier au JSON
$data = file_get_contents('archives.json');

// Décoder
$array_json = json_decode($data, true);
?>
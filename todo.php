<?php
$data = file_get_contents('todo.json');
$array_json = json_decode($data, true);
foreach ($array_json as $value) {
    echo '<tr>';
    echo '<td><input type="checkbox" name="check" value="'.$value['tache'].'"/>'.$value['tache'].'</td>';
    echo '</tr>';
}
?>
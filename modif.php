<?php
if(isset($_POST['submitTask']) AND ($_POST['task'])){
    // Todo.json
    $data = file_get_contents('todo.json');
    $array_json = json_decode($data, true);

    // Sanitization
    $sanitization = filter_var($_POST['task'], FILTER_SANITIZE_STRING);
    
    // Todo.json
    $array_json[] = array('tache' => $sanitization);
    file_put_contents('todo.json', json_encode($array_json));
}

if(isset($_POST['deleteTask']) AND ($_POST['checkbox'])){
    // checkbox
    $done = $_POST['checkbox'];

    // Archives.json
    $data = file_get_contents('archives.json');
    $array_json = json_decode($data, true);
    $array_json[] = array('archives', $done);
    file_put_contents('archives.json', json_encode($array_json));

    // Supprimer une tâche
    $data = file_get_contents('todo.json');
    $array_json = json_decode($data, true);
    unset($array_json[$done]);
    file_put_contents('todo.json', json_encode($array_json));
}
?>
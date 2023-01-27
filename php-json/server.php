<?php
    // include_once __DIR__ . '/functions.php';


    $jsonData = file_get_contents('db/list.json');

    $todoList = json_decode($jsonData, true);

    if (isset($_POST['newTodoElement'])){
        // $todoList[] = $_POST['newTodoElement'];
        array_push($todoList, [ 'name' => $_POST['newTodoElement']]);

        file_put_contents('db/list.json', json_encode($todoList));
    }

    // arriva qui un nuovo dato in $_POST['indexToRemove'],
    // rimuove l'elemento all'indice dato dal nostro array todoList
    // aggiorno il file;

    header('Content-Type: application/json');

    echo json_encode($todoList);

?>

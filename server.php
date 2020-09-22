<?php
    
    include 'db.php';

    $db = $database;

    if (!empty($_GET['author'])) {
        $searchAuthor = $_GET['author'];

        $dbFilter = [];
        foreach($database as $cd){

            if($searchAuthor == $cd['author']){
                $dbFilter[] = $cd;
            }
        }

        $db = $dbFilter;
    }

    header('Content-Type: application/json');
    echo json_encode($db);
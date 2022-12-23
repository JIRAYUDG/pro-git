<?php
    
    require_once('dbconnect.php');

    $db = new Database('localhost', 'project', 'root', '');

    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        echo json_encode($db->query('SELECT * FROM course'));
        echo json_encode($db->query('SELECT * FROM member'));
        echo json_encode($db->query('SELECT * FROM enroll'));
    }   


?>
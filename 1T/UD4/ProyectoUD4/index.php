<?php
include 'controllers/FilmsController.php';

$controller = new FilmsController($pdo);

$action = $_GET['action'] ?? 'index';

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit();
            break;
        case 'delete':
            $controller->delete();
            break;
        default:
            $controller->index();
            break;
    }
?>
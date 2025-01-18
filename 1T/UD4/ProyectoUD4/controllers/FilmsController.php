<?php
include 'db.php';
include 'models/Film.php';

class FilmsController {
    private $filmModel;

    public function __construct($pdo) {
        $this->filmModel = new Film($pdo);
    }

    public function index() {
        $films = $this->filmModel->getAll();
        include 'views/films/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->filmModel->create($_POST['title'], $_POST['director'], $_POST['release_date']);
            header("Location: index.php");
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->filmModel->edit($_POST['id'], $_POST['title'], $_POST['director'], $_POST['release_date']);
            header("Location: index.php");
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->filmModel->delete($_POST['id']);
            header("Location: index.php");
        }
    }
}
?>
<?php
class Film {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM films");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Viene en el Punto 3 PDO 
    }

    public function create($title, $director, $release_date) {
        $stmt = $this->pdo->prepare("INSERT INTO films (title, director, release_date) VALUES (:title, :director, :release_date)");
        $stmt->execute([':title' => $title, ':director' => $director, ':release_date' => $release_date]);
    }

    public function edit($id, $title, $director, $release_date) {
        $stmt = $this->pdo->prepare("UPDATE films SET title = :title, director = :director, release_date = :release_date WHERE id = :id");
        $stmt->execute([':title' => $title, ':director' => $director, ':release_date' => $release_date, ':id' => $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM films WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM films WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
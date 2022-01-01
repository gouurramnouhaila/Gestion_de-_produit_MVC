<?php

class Model {

    private $model;

    public function __construct()
    {
        $this->model = new PDO('mysql:host=localhost;dbname=ecom','root','root');
        $this->model->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }

    public function allProducts() {
        $query = $this->model->prepare('SELECT * FROM produits p INNER JOIN Categorie c ON p.numCategorie=c.numCat');
        $query->execute();

        return $query->fetchAll();
    }

    public function addProd($produit) {
        $query = $this->model->prepare('INSERT INTO produits VALUES (null,?,?,?,?,?,?,?)');
        $query->execute($produit);

    }

    public function delProd($produit) {
        $query = $this->model->prepare('DELETE FROM produits WHERE numProd = ?');
        $query->execute($produit);

    }

    public function findOne($produit) {
        $query = $this->model->prepare('SELECT * FROM produits WHERE numProd = ?');
        $query->execute($produit);

        return $query->fetch();

    }
    public function upDateProd($produit) {
        $query=$this->model->prepare("UPDATE produits SET designation=?,description=?,prix=?,type=?,dateFabrication=?,photo=?,numCategorie=? WHERE numProd=?");
        $query->execute($produit);
    }

    


}

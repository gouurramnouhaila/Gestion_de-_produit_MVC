<?php

require 'Model.php';

class ProductController {

    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function allProds() {

        $products = $this->model->allProducts();
        require 'view_all_prods.php';
    }

    public function findOne() {
        $products = $this->model->findOne(array($_GET['numProd']));
        require 'view_details_prod.php';
    }

    public function addProd() {
        require 'view_add_prod.php';

        $designationP = $_POST['designation'];
        $descriptionP = $_POST['description'];
        $prixP = $_POST['prix'];
        $typeP = $_POST['type'];
        $dateFabrication = $_POST['date'];
        $photoP = $_FILES['photo'];
        $categorie = $_POST['Categorie'];

        $produit = [$designationP,$descriptionP,$prixP,$typeP,$dateFabrication,$photoP,$categorie];

        $res = $this->model->addProd($produit);

        header('location:ProductController.php');
    }

    public function delProd() {
        $products = $this->model->delProd(array($_GET['numProd']));
        header('location:ProductController.php');
    }

    public function upDateProd() {
        $products =  $this->model->findOne(array($_GET['numProd']));
        require 'view_update_prod.php';

        $numProd = $_GET['numProd'];
        $designationP = $_POST['designation'];
        $descriptionP = $_POST['description'];
        $prixP = $_POST['prix'];
        $typeP = $_POST['type'];
        $dateFabrication = $_POST['date'];
        $photoP = $_FILES['photo'];
        $categorie = $_POST['Categorie'];

        $products = [$designationP,$descriptionP,$prixP,$typeP,$dateFabrication,$photoP,$categorie,$numProd];

        $this->model->upDateProd($products);

        header('location:ProductController.php');

    }


    public function action() {
        $action = 'allProds';

        if(isset($_GET['action'])) {
            $action = $_GET['action'];
        }

        switch ($action) {
            case 'allProds' : $this->allProds();
            break;

            case 'addProd' : $this->addProd();
            break;

            case 'delProd' : $this->delProd();
            break;

            case 'findOne' : $this->findOne();
            break;

            case 'upDateProd' : $this->upDateProd();
            break;
        }
    }
}

$c = new ProductController();
$c->action();

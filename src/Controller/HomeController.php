<?php
namespace src\Controller;

use src\Entity\Produit;
use src\Utilities\Database;

class HomeController
{
    public function home()
    {
        $database = new Database();
        $products = $database->query('SELECT * FROM produit', Produit::class);

        return compact('products');
    }
}
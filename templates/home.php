<?php

use src\Controller\HomeController;

$controller = new HomeController();
extract($controller->home());

require 'inc/header.php' ?>

    <h1>Page d'accueil</h1>

    <ul>
        <?php foreach ($products as $product) : ?>
            <li><?= $product->getName(); ?></li>
        <?php endforeach; ?>
    </ul>

<?php require 'inc/footer.php' ?>
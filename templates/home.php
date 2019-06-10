<?php

use src\Controller\HomeController;

$controller = new HomeController();
extract($controller->home());

require 'inc/header.php' ?>

    <h1>Page d'accueil</h1>

    <ul>
        <?php foreach ($articles as $article) : ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $article->getTitle(); ?></h5>
                    <p class="card-text"><?= $article->getContent(); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>

<?php require 'inc/footer.php' ?>
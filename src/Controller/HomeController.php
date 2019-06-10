<?php
namespace src\Controller;

use src\Entity\Article;
use src\Utilities\Database;

class HomeController
{
    public function home()
    {
        $database = new Database();
        $articles = $database->query('SELECT * FROM article', Article::class);

        return compact('articles');
    }
}
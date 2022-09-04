<?php 
    require_once __DIR__ . '/../vendor/autoload.php';
    
    $loader = new \Twig\Loader\FilesystemLoader('../views/');
    $twig = new \Twig\Environment($loader);

    $template = $twig->load("form2incognitas.html");
    echo $template->render();
?>
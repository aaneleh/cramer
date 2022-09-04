<?php

    require_once __DIR__ . '/../vendor/autoload.php';
        
    $loader = new \Twig\Loader\FilesystemLoader('../views/');
    $twig = new \Twig\Environment($loader);

    require_once('Cramer2x2.php');
    $p = $_POST;
    $cramer = new Cramer2x2($p['x1'], $p['y1'], $p['x2'] , $p['y2'], $p['result1'], $p['result2']);
    if($cramer->calcular()){
        $resultado = "x = ".$cramer->getX().", y = ".$cramer->getY();
    } else { $resultado = "Indeterminado"; }

    $dados = array(
        "resultado" => $resultado
    );

    $template = $twig->load("resultado2x2.html");
    echo $template->render($dados);

?>

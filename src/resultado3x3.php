<?php

    require_once __DIR__ . '/../vendor/autoload.php';
        
    $loader = new \Twig\Loader\FilesystemLoader('../views/');
    $twig = new \Twig\Environment($loader);

    require_once('Cramer3x3.php');
    $p = $_POST;
    $cramer = new Cramer3x3($p['x1'], $p['y1'], $p['z1'], $p['x2'] , $p['y2'], $p['z2'], $p['x3'] , $p['y3'], $p['z3'], $p['result1'], $p['result2'], $p['result3']);
    if($cramer->calcular()){
        $resultado = "x = ".$cramer->getX().", y = ".$cramer->getY()." e z = ".$cramer->getZ();
    } else {
        $resultado = "Indeterminado";
    }

    $dados = array(
        "resultado" => $resultado
    );

    $template = $twig->load("resultado3x3.html");
    echo $template->render($dados);

?>

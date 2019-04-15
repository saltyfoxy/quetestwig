<?php
require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/../src/View');
$twig = new Twig_Environment($loader);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];


echo $twig->render('index.html.twig', array('products'=>$products,));

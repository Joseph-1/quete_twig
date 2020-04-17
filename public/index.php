<?php

require '../vendor/autoload.php';
$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$plats = [
    'entrée' => 'bouchée à la reine',
    'plat' => 'boeuf bourguignon',
    'dessert' => 'banana split',
];

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', [
    "products" => $products,
    "plats" => $plats,
]);

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding('UTF-8');

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$twig = new \Twig\Environment(
    $loader,
    array(
        'cache' => 'vendor/twig/Cache',
        'auto_reload' => true
    )
);

try {
    $dbh = new PDO('mysql:dbname=notes;host=localhost', 'admin', 'admin');
} catch (PDOException $e) {
    die($e->getMessage());
}

$notes = array(
    array('title' => 'title-1', 'text' => 'text-1', 'date' => '11/11/2023'),
    array('title' => 'title-2', 'text' => 'text-2', 'date' => '11/11/2023'),
    array('title' => 'title-3', 'text' => 'text-3', 'date' => '11/11/2023'),
    array('title' => 'title-4', 'text' => 'text-4', 'date' => '11/11/2023'),
    array('title' => 'title-5', 'text' => 'text-5', 'date' => '11/11/2023')
);

echo $twig->render('base.html.twig', ['notes' => $notes]);
?>
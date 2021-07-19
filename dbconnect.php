<?php
$host = '127.0.0.1';
$db   = 'Quizz';
$user = 'root';
$pass = 'root';
$port = "8889";

$conn = "mysql:host=$host;dbname=$db;port=$port;charset=UTF8";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {

    $bdd = new PDO($conn, $user, $pass, $options);

    // if ($bdd) {
    //     echo "Connexion réussie à $db !";
    // }
} catch (Exception $e) {
    echo $e->getMessage();
}

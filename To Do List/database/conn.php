<?php
$host     = "ep-nameless-field-ac2ahgmm-pooler.sa-east-1.aws.neon.tech";
$db       = "neondb";
$user     = "neondb_owner";
$pass     = "npg_ainBolNdF15h";
$port     = "5432";
$endpoint = "ep-nameless-field-ac2ahgmm";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$db;sslmode=require;options=endpoint=$endpoint",
        $user,
        $pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    //echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

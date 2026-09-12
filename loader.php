<?php 
    require_once ('vendor/autoload.php');
    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    try {
        $dotenv->load();
    } catch (Exception $e) {
        die("Failed to load .env file: " . $e->getMessage());
    }
?>
<?php

function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=coiffurekopp;charset=utf8', 'root', '');
        return $database;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=one_v_one;charset=utf8;', 'root', 'root');
} catch (Exception $e) {
    die('Une erreur a été trouvée : ' . $e->getMessage());
}

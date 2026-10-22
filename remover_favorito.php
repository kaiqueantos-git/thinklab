<?php
session_start();
$mysql = new mysqli("localhost", "root", "", "scholarbase", 3306);

if (isset($_SESSION['usr']) && isset($_GET['artigo_id'])) {
    $usuario_id = $_SESSION['usr']['id'];
    $artigo_id = $_GET['artigo_id'];

    $mysql->query("DELETE FROM favorito WHERE usuario_id = '$usuario_id' AND artigo_id = '$artigo_id'");
}

header("Location: perfil.php?aba=favoritos");
exit;
?>
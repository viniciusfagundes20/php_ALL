<?php 

if (!defined('URL')) {
    header("Location: /");
    exit();
}

echo "Cleaning OK!";

unset($_SESSION['id']);
unset($_SESSION['user']);
unset($_SESSION['admin']);

header("Location: ./");

 ?>
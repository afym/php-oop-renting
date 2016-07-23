<?php

session_start();

if (!isset($_SESSION['clicks'])) {
    $_SESSION['clicks'] = 1;
} else {
    $_SESSION['clicks'] = $_SESSION['clicks'] + 1;
}

header("Location: /oop/src/view/sesion/count.php");
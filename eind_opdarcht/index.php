<?php
// Header en nav inladen
include 'includes/header.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'onderwerp1':
        include 'pages/onderwerp1.php';
        break;
    case 'onderwerp2':
        include 'pages/onderwerp2.php';
        break;
    case 'onderwerp3':
        include 'pages/onderwerp3.php';
        break;
    default:
        include 'pages/404.php';
        break;
}

// include 'includes/main.php';

include 'includes/footer.php';
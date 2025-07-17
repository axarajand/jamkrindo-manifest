<?php

if (isset($_SESSION['logged_in'])) {
    if (($_SESSION['user_venue'] === 'Sentul')) {
        include 'sentul.php';

    } elseif ($_SESSION['user_venue'] === 'Jogja') {
        include 'jogja.php';
    }
} else {
        include 'sentul.php';
    }
?>
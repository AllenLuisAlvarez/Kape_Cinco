<?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        echo json_encode(['loggedIn' => true, 'role' => $_SESSION['role']]);
    } else {
        echo json_encode(['loggedIn' => false]);
    }
?>

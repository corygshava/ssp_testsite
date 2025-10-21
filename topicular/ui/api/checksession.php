<?php
    session_start();

    if (isset($_SESSION['curuser'])) {
        // Session variable exists
        echo "Current user: " . $_SESSION['curuser'];
    } else {
        // Not set
        echo "No current user set.";
    }
?>
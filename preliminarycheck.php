<?php
    session_start();
    if (!isset($_GET['id_active'])){ // redirect if not logged in
        header("location: index.php");
    }
?>
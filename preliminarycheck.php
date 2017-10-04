<?php
    session_start();
    if (!isset($_SESSION['id'])){ // redirect if not logged in
        header("location: index.php");
    } else { // force url to show proper id_active
        if (!isset($_GET['id_active'])){
            header("Refresh:0; url=$filename?id_active=$_SESSION[id]");
        } else {
            if ($_GET['id_active'] != $_SESSION['id'])
                header("Refresh:0; url=$filename?id_active=$_SESSION[id]");
        }
    }
?>
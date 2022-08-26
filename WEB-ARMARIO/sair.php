<?php
        session_start();
        unset($_SESSION['RM']);
        unset($_SESSION['SENHA']);
        header('Location: logintestERICK.php');

?>
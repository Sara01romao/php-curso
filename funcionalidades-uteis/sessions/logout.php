<?php

if(!isset($_SESSION)){
    session_start();

    session_dentroy();

    header("Location: login.php");
}




?>
<?php
if(!isset($_SESSION)){
    session_start();


    echo $_SESSION['nomeDoUsuario'];


    //para destruir a session

    session_destroy();
}

?>
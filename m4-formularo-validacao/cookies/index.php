<?php
session_start();

if($_SESSION['aviso']){
   echo $_SESSION['aviso']; //mostra aviso

   $_SESSION['aviso']= ''; //limpa


}

//conferir se eexiste cookie
if(isset($_COOKIE['nome'])){
   $nome = $_COOKIE['nome'];
    echo '<h2>'.$nome.'</h2>';
}
?>

<a href="apagar.php">Apagar</a>

<form method="POST" action="recebedor.php">
   <label for="">Nome</label>
   <input type="text" name="nome" id="nome">
   <br>
   <br>

   <label for="">Idade</label>
   <input type="text" name="idade">
   <br>
   <br>

   <label for="">Email</label>
   <input type="text" name="email">
   <br>
   <br>

   <input type="submit" value="Enviar">



</form>




<?php



$senha = "1234";

//$criptografia = md5($senha); não é maisa seguro
//$sql = "SELECT * FROM usuario WHERE senha = '$criptografia'";


$hash = password_hash($senha, PASSWORD_DEFAULT); //função php para criptografar 

// echo $hash;

echo password_verify($senha, '$2y$10$5He1lVWqcvGraIcAaxNvSeXsBx8kTP/whzJJSdQetnWXzCXCl81H.');





?>


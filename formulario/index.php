<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
  <h1> Fomulário com PHP</h1>

  <form method="POST" action="">
     
    <p class="error">* Obrigatório</p>

     Nome: <input name="nome" type="text"><br><br>

     Email: <input name="email" type="text"><br><br>

     Website: <input name="website" type="text"><br><br>

     Comentário: <textarea name="comentario"  cols="20" rows="5"></textarea>
     <br><br>

     Gênero: <input type="radio" name="genero" value="Masculino">Masculino 
             <input type="radio" name="genero" value="Feminino">Feminino
             <input type="radio" name="genero" value="outros">Outros

     <button type="submit" name="enviado">Enviar</button>

     <h2>Dados Enviados:</h2>


     <?php
        //verifica se variavel foi definida

        if(isset($_POST['enviado'])){
           
            $genero = "Não selecionado";

            if(isset($_POST['genero'])){
                $genero= $_POST['genero'];
            }

            echo "<p>Nome:".$_POST['nome']." </p>" ."<br>";
            echo "<p>Email:".$_POST['email']." </p>" ."<br>";
            echo "<p>Website:".$_POST['website']." </p>" ."<br>";
            echo "<p>Comentario:".$_POST['comentario']." </p>" ."<br>";
            echo "<p>Genero:".$genero." </p>" ."<br>";
            
        }
        
    ?>
  </form>

</body>
</html>
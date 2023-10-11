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

           //empty=verificar se a variável é vazia
           //strlen = verifica a quantidade de caracteres 
            if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100){
                echo '<p class="error"> Preencha o campo nome</p>';

                //fução die mata a excutação do script

                die();
            }
           
            // Valida email
            if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo '<p class="error"> Preencha o campo email</p>';

                //fução die mata a excutação do script

                die();
            }

           
            $genero = "Não selecionado";

            if(isset($_POST['genero'])){
                $genero= $_POST['genero'];

                //validar Genero

                if($genero != "masculino" && $genero != "feminino" && $genero != "outros"){
                    echo '<p class="error"> Preencha o campo genero</p>';

                        //fução die mata a excutação do script

                    die();
                }

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
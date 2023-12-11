<?php


//pegar o tipo do arquivo
//echo pathinfo("home-lp.png", PATHINFO_EXTENSION);

if(isset($_FILES['arquivo'])){

    $arquivo = $_FILES['arquivo'];

    if($arquivo['error']){
        die("Falha ao enviar arquivo");
    }

    if($arquivo['size'] > 5097152){
        var_dump($_FILES['arquivo']);
        
        die("Arquivo muito grande !! Max: 2MB");

       
    }else{
       
        //pasta para salvar o arquivo, usara a função uniquid para criar nome unico para o arquivo
        $pasta = "arquivo/"; //local para salvar arquivo
        $nomeDoArquivo = $arquivo['name'];
        $novoNomeDoArquivo= uniqid(); //nome unico

        
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); //extensao do arquivo
        //strtolower converte para minusculas
        

        if($extensao != "jpg" && $extensao != 'png'){
            die("Tipo de arquivo não aceito");
        }

        $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);
        

        var_dump($_FILES['arquivo']);
        echo "Arquivo enviado";

    }

     

  
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Arquivos</title>
</head>
<body>
    
   <form  enctype="multipart/form-data" action="" method="post" >
      <p><label for="">Selecionar o Arquivo</label></p>

      <input type="file" name="arquivo">
      <button name="upload" type="submit">Enviar Arquivo</button>

   </form>


</body>
</html>
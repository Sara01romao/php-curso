<?php

include('conexao.php');

//pegar o tipo do arquivo
//echo pathinfo("home-lp.png", PATHINFO_EXTENSION);

if(isset($_FILES['arquivo'])){

    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo");
    

    if($arquivo['size'] > 2097152)
        die("Arquivo muito grande !! Max: 2MB");
    
       
    
       
    //pasta para salvar o arquivo, usara a função uniquid para criar nome unico para o arquivo
    $pasta = "imgs/"; //local para salvar arquivo
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo= uniqid(); //nome unico

    
    
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); //extensao do arquivo
    //strtolower converte para minusculas
        

    if($extensao != "jpg" && $extensao != 'png')
        die("Tipo de arquivo não aceito");
    

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);

    // echo "Deu certo "."------" . var_dump($deu_certo). $nomeDoArquivo ;
    // echo "<br> <br>";

    //$deu_certo = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $path= $pasta . $novoNomeDoArquivo . "." . $extensao;

    var_dump($deu_certo);

    if($deu_certo)

       $mysqli -> query("INSERT INTO arquivos ( path) VALUES( '$path')") or die($mysqli->error);

       //echo "</p>  Para acessar-lo, <a href=\"arquivos/$nomeDoArquivo.$extensao\" target=\"_blank\">Clique aqui</a></p>";

    else
       echo "<p>Falha ao enviar arquivo</p>";
    


    
     

  
}

//listar imgs
$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);

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


   <table border="1px">
      <thead>
          <th>Preview</th>
          <th>Arquivo</th>
          <th>Data de envio</th>
        
      </thead>
      <tbody>

           <?php
            while($arquivo = $sql_query->fetch_assoc()){


            
           ?>
          
                <tr>
                    <td><img width="150" src="<?php echo $arquivo['path'];?>" alt=""></td>
                    <td><a href="<?php echo $arquivo['path'];?>" target="_blank"> <?php echo $arquivo['path'];?></a></td>
                   
                    <td><?php echo date("d/m/Y H:i", strtotime( $arquivo['data_upload']));?></td>
                </tr>

          <?php
            }
          ?>
      </tbody>
   </table>

</body>
</html>
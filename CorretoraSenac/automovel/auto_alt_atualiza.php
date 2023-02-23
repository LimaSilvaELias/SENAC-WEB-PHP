<?php
session_start();
include_once('../conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora SENAC - atualiza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="auto_heber.css">
</head>
<body>
<div class="bgautomovel">
<nav class="navbar navbar-dark mx-3">
    <div class="navbar ">
        <div class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="../Index.html" target="_parent">Inicio</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="automovel.html" target="_parent">Automovel</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovelElias/auto_cad.php" target="_parent">Cadastro</a>
        </div>  
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovelMaira/aut_cons1.php" target="_parent">Ler</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="auto_alt_cons.php" target="_parent">Atualizar</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovelMaira/aut_del.php" target="_parent">Deletar</a>
        </div>
    </div>
  </nav>
  <br><br>
  <div class="d-flex justify-content-center container-fluid">
    <div class="corpo">

            <header class="cabecalho text-center">
                <h1 class="text-center" >Corretora - Senac para todos</h1>
                <br>
                <h2>Acidentes não acontecem por acaso, mas por descaso</h2>
                <h1>alterar dados de cliente</h1>
            </header>
    <hr>
    <?php
      $renavam=$_POST['renavam'];
      $placa=$_POST['placa'];
        $fabricante=$_POST['fabricante'];
      $ano=$_POST['ano'];
      $modelo=$_POST['modelo'];
        

      $result_veiculo="UPDATE e2_automovel SET renavam='$renavam',placa='$placa',fabricante='$fabricante',ano='$ano',modelo='$modelo' WHERE renavam='$renavam'";  

        $resultado_veiculo = mysqli_query($conn,$result_veiculo);
        echo"<div class='text-center mx-4'><h2><font color='green'>atualizado com sucesso</font></h2></div>";
    ?>

        <form  class="text-center" method="POST" name="consultar_automovel" action="auto_alt_cons.php">
            <label for="">
                fazer nova alteração: 
            </label>
            <br>
            <input class="btn btn-outline-light" type="submit" name="voltar" value="voltar">
        </form>

    <hr><br>
        <footer class="text-center">
          <p style="color: #808080;">&copy; Copyrigth 
            <script>
                var year = new Date();
                document.writeln(+year.getUTCFullYear());
            </script> 
            - Back-End - SENAC - Curso técnico em Informática - Profº Valdemir - Aluno </p>
        </footer>
    </div>
  </div>
</div>

</body>
</html>
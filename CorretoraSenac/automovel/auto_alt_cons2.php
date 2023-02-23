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
<div class="bgautomovel zoom">
  
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
        <header class="cabecalho text-center mx-4">
            <h1 class="text-center mx-4" >Corretora - Senac para todos</h1>
            <br>
            <h2>Acidentes não acontecem por acaso, mas por descaso</h2>
            <h1>alterar dados do automovel</h1>
        </header>

            <hr><br><br><br>
    <?php
    $renavam=filter_input(INPUT_POST,'renavam',FILTER_SANITIZE_NUMBER_INT);
    $result_automovel="SELECT renavam,placa,fabricante,ano,modelo from e2_automovel where renavam='$renavam'";
    $resultado_automovel = mysqli_query($conn, $result_automovel);
    $row_automovel;
    ?>

        <form method="POST" name="alterar_automovel" action="auto_alt_atualiza.php">
            <?php
                if ($row_automovel = mysqli_fetch_assoc($resultado_automovel)) {

                    
                    echo"<div class='text-center  mx-4'>O VEICULO CONSTA NA NOSSA BASE DE DADOS<br></div><br>";

                    echo"<div class='text-center mx-4'><h1><font color='blue'>para realizar a auteração preencha os campos</font></div></h1>";

                    echo"<div class='text-center mx-4'><label>Renavam</label></div>
                    <div class='text-center mx-4'><input style='color: #000000;' type='number' name='renavam' placeholder='".$row_automovel['renavam']."'></div><br>";

                    echo"<div class='text-center mx-4'><label>Placa</label></div>
                    <div class='text-center mx-4'><input style='color: #000000;' type='text' name='placa' placeholder='".$row_automovel['placa']."'></div><br> ";

                    echo"<div class='text-center mx-4'><label>Fabricante</label></div>
                    <div class='text-center mx-4'><input style='color: #000000;' type='text' name='fabricante' placeholder='".$row_automovel['fabricante']."'></div><br>";

                    echo"<div class='text-center mx-4'><label>Ano.</label></div>
                    <div class='text-center mx-4'><input style='color: #000000;' type='text' name='ano' placeholder='".$row_automovel['ano']."'></div><br>";

                    echo"<div class='text-center mx-4'><label>Modelo</label></div>
                    <div class='text-center mx-4'><input style='color: #000000;' type='text' name='modelo' placeholder='".$row_automovel['modelo']."'><br></div>";

                    echo"<div class='text-center mx-4'><input class='btn btn-outline-light' type='submit' name='atualiza' value'atualiza'></div><br><br><br>";

                }else{
                    echo"<h2 class='text-center'><font color='red'>Automovel não existe</font></h2>";
                };
            ?>
        </form>
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

<body>
    


</body>
</html>
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
    <link rel="stylesheet" href="cli_heber.css">
</head>
<div class="bgcliente">
<nav class="navbar navbar-light mx-3">
        
    <div class="navbar ">
        <div class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="../Index.html" target="_parent">Inicio</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-black" href="cliente.html" target="_parent">Cliente</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-black" href="cli_cad.php" target="_parent">Cadastro</a>
        </div>  
        <div class="nav-item">
          <a class="nav-link text-black" href="cli_cons1.php" target="_parent">Ler</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-black" href="cli_alt_cons.php" target="_parent">Atualizar</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-black" href="cli_del.php" target="_parent">Deletar</a>
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
            <h1>alterar dados de cliente</h1>
        </header>

<hr><br><br><br>
<?php
$codigo=filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_NUMBER_INT);
$result_cliente="SELECT codigo,nome,cpf,rg,tel from e1_clientes where codigo='$codigo'";
$resultado_cliente = mysqli_query($conn, $result_cliente);
$row_cliente;
?>

<form method="POST" name="alterar_cliente" action="cli_alt_atualiza.php">
    <?php
        if ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
            echo"<div class='text-center  mx-4'>O CLIENTE CONSTA NA NOSSA BASE DE DADOS<br></div><br>";

            echo"<div class='text-center mx-4'><h1><font color='lightblue'>Para realizar a auteração preencha os campos</font></div></h1>";

            echo"<div class='text-center mx-4'><label>Código</label></div>
            <div class='text-center mx-4'><input type='number' name='codigo' placeholder='".$row_cliente['codigo']."'></div><br>";

            echo"<div class='text-center mx-4'><label>Nome</label></div>           <div class='text-center mx-4'><input type='text' name='nome' placeholder='".$row_cliente['nome']."'></div><br>";

            echo"<div class='text-center mx-4'><label>Rg</label></div>         <div class='text-center mx-4'><input type='text' name='rg' placeholder='".$row_cliente['rg']."'></div><br>";

            echo"<div class='text-center mx-4'><label>cpf</label></div>          <div class='text-center mx-4'><input type='text' name='cpf' placeholder='".$row_cliente['cpf']."'></div><br>";

            echo"<div class='text-center mx-4'><label>tel</label></div>          <div class='text-center mx-4'><input type='text' name='tel' placeholder='".$row_cliente['tel']."'></div><br>";

            echo"<div class='text-center mx-4'><input type='submit' class='btn btn-outline-light' name='atualiza' value'atualiza'></div>";

            

        }else{
            echo"<h2 class='text-center'><fontcolor='red'>Cliente não existe</font></h2><br>";
        };
    

    ?>

  </form >
  <br><br>
    <footer class="text-center">
      <p style="color: #dfdfdf;">&copy; Copyrigth 
        <script>
            var year = new Date();
            document.writeln(+year.getUTCFullYear());
        </script> 
        - Back-End - SENAC - Curso técnico em Informática - Profº Valdemir - Aluno </p>
    </footer>
    </div>
    </div><br><br><br><br><br><br><br>
</div>
    
<body>
    


</body>
</html>
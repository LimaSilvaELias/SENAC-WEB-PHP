<?php
session_start();
include_once("../conexao.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora Senac: consulta1</title>
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
    <div class="d-flex justify-content-center container-fluid text-center">
        <div class="corpo">
            <header class="cabecalho">
                <h1 class="text-center">Corretora - Senac para todos</h1>
                <br>
                <h2 class="titulo">Acidentes não acontecem por acaso mas por descaso</h2>
                <h2 class="titulo">Consulta de clientes</h2>
            </header>
    <br><br>
        <div class="">
            <?php
            $codigo = filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_NUMBER_INT);
            $result_cliente="SELECT codigo,nome,cpf,rg,tel FROM e1_clientes where codigo='$codigo'";
            $resultado = mysqli_query($conn,$result_cliente);
            if($row_cliente = mysqli_fetch_assoc($resultado)){
                echo"codigo:  ".$row_cliente['codigo']."<br>"; 
                echo"nome:  ".$row_cliente['nome']."<br>";
                echo"cpf:  ".$row_cliente['cpf']."<br>";
                echo"rg:  ".$row_cliente['rg']."<br>";
                echo"tel:  ".$row_cliente['tel']."<br>";
            }else{
                echo"cliente não cadastrado!!";
            };
            ?>
        </div>
            <br><hr>
            <footer>
                <p style="color: #dfdfdf;">&copy; Copyrigth 
                <script>
                    var year = new Date();
                    document.writeln(+year.getUTCFullYear());
                </script> 
                - Back-End - SENAC - Curso técnico em Informática - Profº Valdemir - Aluno Heber Gomes</p>
            </footer>
            <hr>
            </div>
        </div>
        <br><br><br><br><br><br><br>
    </div>
    

<body>
    

    
</body>
</html>


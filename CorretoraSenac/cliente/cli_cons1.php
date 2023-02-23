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
    <br><br><br>
    <div class="form-container">
        <form method="POST" action="cli_cons2.php">
        <label>Código</label><br>
        <input class="btn btn-outline-light" type="number" require name="codigo" placeholder="Digite seu codigo do cliente">
        <br><br>
        <input class="btn btn-outline-light" type="submit" name="consultar">
        </form>
        <br>
    </div>
    <div class="form-container">
    <form action="cli_consx.php" method="POST">
        <label>Pesquisa todos os registros: </label><br><br>
        <input class="btn btn-outline-light" type="submit" value="consultar">
    </form>
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
    </div><br><br>
</div>
<body>
    

    
</body>
</html>



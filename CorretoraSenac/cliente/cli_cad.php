<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="cli_heber.css">
</head> 

<body>
    <div class="bgcliente text-center">
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
        
        <div class="d-flex justify-content-center container-fluid">
        <div class="corpo">

            <header class="cabecalho text-center">
            <h1 class="text-center">Corretora - Senac para todos</h1>
                <br>
                <h2>Acidentes não acontecem por acaso, mas por descaso</h2>
                <h1>Inclusão de clientes</h1>
            </header>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

            <script>
                jquery(function($) {
                    $("#cpf").mask("999.999.999-99");
                    $("#tel").mask("(99)99999-9999");
                })
            </script>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>

            <div class="">
                <form method="POST" action="cli_pro.php">
                    <label for="">CÓDIGO:</label><br>
                    <input class="btn btn-outline-light" type="number" name="codigo" maxlength="3" requires autofocus placeholder="Digite o codigo">
                    <br><br>
                    <label for="">NOME:</label><br>
                    <input class="btn btn-outline-light" type="text" name="nome" maxlength="50" requires autofocus placeholder="Digite seu nome">
                    <br><br>
                    <label for="">RG:</label><br>
                    <input class="btn btn-outline-light" type="number" name="rg" maxlength="10" requires autofocus placeholder="Digite seu rg">
                    <br><br>
                    <label for="">CPF:</label><br>
                    <input class="btn btn-outline-light" type="number" name="cpf" maxlength="15" requires autofocus placeholder="999.999.999-99">
                    <br><br>
                    <label for="">Telefone:</label><br>
                    <input class="btn btn-outline-light" type="number" name="telefone" maxlength="12" requires autofocus placeholder="(99)9.9999-9999">
                    <br>
                    <br>
                    <input class="btn btn-outline-light" type="submit" value="CADASTRAR">
                    <br><br>
                    <a class="btn btn-outline-light" href="cliente.html" type="submit">Retornar</a>
                </form>

            </div>
            <br><br>
            <footer>
                <p style="color: #e4e4e4;">&copy; Copyrigth
                    <script>
                        var year = new Date();
                        document.writeln(+year.getUTCFullYear());
                    </script>
                    - Back-End - SENAC - Curso técnico em Informática - Profº Valdemir - Aluno
                </p>
            </footer>

            </div>
        </div>
    </div>

</body>

</html>
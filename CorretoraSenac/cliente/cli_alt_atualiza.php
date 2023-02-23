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
        <header class="cabecalho text-center">
            <h1 class="text-center" >Corretora - Senac para todos</h1>
            <br>
            <h2>Acidentes não acontecem por acaso, mas por descaso</h2>
            <h1>alterar dados de cliente</h1>
        </header>
<br><br>
<?php
	$codigo=$_POST['codigo'];
	$nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
	$rg=$_POST['rg'];
	$tel=$_POST['tel'];
    

	$result_usuario="UPDATE e1_clientes SET codigo='$codigo',nome='$nome',cpf='$cpf',rg='$rg',tel='$tel' WHERE codigo='$codigo'";  

    $resultado_usuario = mysqli_query($conn,$result_usuario);
    echo"<h2 class='text-center'><font color='lightgreen'>atualizado com sucesso</font></h2>";

?>



    <form  class="text-center" method="POST" name="consultar_cliente" action="cli_alt_cons.php">
        <label for="">
            fazer nova alteração: 
        </label>
        <input class="btn btn-outline-light" type="submit" name="voltar" value="voltar">
    </form>

<hr><br>

    <footer class="text-center">
      <p style="color: #dfdfdf;">&copy; Copyrigth 
        <script>
            var year = new Date();
            document.writeln(+year.getUTCFullYear());
        </script> 
        - Back-End - SENAC - Curso técnico em Informática - Profº Valdemir - Aluno </p>
    </footer>
    </div>
</div>
<hr><br><br><br><br><br><br>
</div>
<body>
    


</body>
</html>
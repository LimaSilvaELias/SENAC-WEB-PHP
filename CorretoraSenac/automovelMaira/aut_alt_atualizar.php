<?php
session_start();
include_once("../aula07/conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTORIA SENAC - atualizar</title>
    <link rel="stylesheet" type="text/css" href="">
    <link href="" rel="stylesheet">
</head>
<center>
<header class="cabecalho">
    <h1 class="titulo" align="center">CORRETORA - SENAC PARA TODOS</h1>
    <br>    
    <h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!</h2>
    <br>
    <h2 class="titulo" align="center">ALTERAR DADOS DE CLIENTE</h2>
    </header>
<hr>
<br>
<?php
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];

$result_usuario = "UPDATE e1_clientes SET codigo='$codigo', nome='$nome',
cpf='$cpf', rg='$rg', telefone='$telefone' WHERE codigo='$codigo'";

$resultado_usuario = mysqli_query($conn, $result_usuario);
echo "<h2><font color='green'>Atualizado com sucesso</font></h2>";

?>
<form method="POST" name="consultar_cliente" action="cli_alt_cons.php">
    <label>Fazer nova atualização:</label>
    <input type="submit" name="voltar" value="Voltar">
</form>
<hr>
<br><br><br>

<a href="cliente.html"><img src="../aula07/MicrosoftTeams-image (3).png" width="20" height="20"></a>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<footer>
    <p style="color: #808080;">&copy;Copyright
    <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script></p>
</footer>

</center>
<body>
    
</body>
</html>
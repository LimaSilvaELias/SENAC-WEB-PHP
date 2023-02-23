<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRETORA SENAC - proConsulta</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="">
</head>
<center>
<header class="cabecalho">
        <h1 class="titulo" align="">CORRETORA - SENAC PARA TODOS</h1>
    <br>
    <h2 class="titulo" align="">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!</h2>
<br>
    <h1 class="titulo" align="">EXCLUSÃO DE AUTOMÓVEIS</h1>
    </header>
    <hr>
    <br>
<?php
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$renavam = filter_input(INPUT_POST, 'renavam', FILTER_SANITIZE_NUMBER_INT);
$result_automovel = "DELETE FROM e2_automovel WHERE renavam=$renavam";
$resultado = mysqli_query($conn, $result_automovel);

if (mysqli_affected_rows($conn)) {
    echo "<h2><font color:'blue'>Automóvel excluído com sucesso!</font></h2>";
}else{
    echo "<h2><font color:'red'>Automóvel não existe!</font></h2>";
}    

?>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<footer>
    <p style="color: #808080;">&copy;Copyright
    <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script></p>
</footer>

</center>
</html>
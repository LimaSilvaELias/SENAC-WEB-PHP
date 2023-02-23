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
    <link rel="stylesheet" type="text/css" href="mairacss.css">
    <link rel="stylesheet" type="text/css" href="">
</head>
<body background="fundo.png">
<center>
<header class="cabecalho">
<div class="titulos">
    <h1 class="titulo1" align="left">CORRETORA <br> SENAC PARA TODOS</h1>
    <h2 class="titulo2" align="left">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!</h2>
</div><br>
    <h1 class="titulo3">EXCLUSÃO DE AUTOMÓVEIS</h1>
    </header>
    <br><br><br>
    <br><br><br>

<?php
if(isset($_SESSION['msg'])){
    echo$_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>
<div class="form-container">
    <form method="POST" action="aut_del_pro.php">
        <label>Código:</label>
        <input type="number" name="renavam" required placeholder="Digite o código do automóvel
        que deseja excluir">
        <input type="submit" name="Consultar">
    </form>
</div>
<br><br>
<a href="../automovel/automovel.html"><img src="retornar.png" whidth="20" height="20">
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<footer>
    <p style="color: #808080;">&copy;Copyright
    <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script></p>
</footer>
</center>
   
</body>
</html>
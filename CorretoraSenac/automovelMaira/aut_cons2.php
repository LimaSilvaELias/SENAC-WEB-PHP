<?php
session_start();
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRETORA - SENAC: consulta2</title>
    <link rel="stylesheet" type="text/css" href="">
    <link href="" rel="stylesheet">
</head>
<header class="cabecalho">
    <h1 class="titulo" align="center">CORRETORA - SENAC PARA TODOS</h1>
    <br>    
    <h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!</h2>
    <br>
    <h2 class="titulo" align="center">CONSULTA DE AUTOMÓVEIS</h2>
    </header>
    <div style="text-align: left;">
    <hr>

<?php
$renavam = filter_input(INPUT_POST,'renavam',FILTER_SANITIZE_NUMBER_INT);
$result_automovel = "SELECT renavam, placa, fabricante, ano, modelo FROM e2_automovel 
WHERE renavam=$renavam";
$resultado = mysqli_query($conn, $result_automovel);

if($row_automovel = mysqli_fetch_assoc($resultado)) {
    echo"Código........:".$row_automovel['renavam']."<br>";
    echo"Placa.........:".$row_automovel['placa']."<br>";
    echo"Fabricante....:".$row_automovel['fabricante']."<br>";
    echo"Ano...........:".$row_automovel['ano']."<br>";
    echo"Modelo........:".$row_automovel['modelo']."<br>";
}else{
    echo "Automóvel não cadastrado!";
}
?>
 <a href="automovel.html"><img src="retornar.png" whidth="20" height="20">
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<footer>
    <p style="color: #808080;">&copy;Copyright
    <script>var year=new Date();document.writeln(+year.getUTCFullYear());</script></p>
</footer>
<body>
    
</body>
</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORRETORA - SENAC: consulta1</title>
    <link rel="stylesheet" type="text/css" href="mairacss.css">
    <link href="" rel="stylesheet">
</head>
<body background="fundo.png">
    

<center>
    <header class="cabecalho">
<div class="titulos">
    <h1 class="titulo1" align="left">CORRETORA <br> SENAC PARA TODOS</h1>  
    <h2 class="titulo2" align="left">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO!</h2>
</div></header> <br><br>
    <h2 class="titulo3" align="center">CONSULTA DE AUTOMÓVEIS</h2>
   
    <br>

    <br>
    <div class="form-container">
        <form method="POST" action="aut_cons2.php">
            <label>CÓDIGO</label>
            <input type="number" required name="renavam" placeholder="Digite o código do automóvel">
            <input type="submit" name="Consultar">
        </form>
    <br><br><br>
    </div>
    <div class="form-container">
        <form method="POST" action="aut_consx.php">
            <label>Pesquisa todos os registros:</label>
            <input type="submit" name="Consultar">
        </form>
    </div>
    <br><br><br>
    <hr>
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
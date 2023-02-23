<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corretora SENAC - Cadastro Automovel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="elias.css">
    
</head>
<nav class="navbar navbar-dark bg-dark mx-3">

    <div class="navbar ">

        <div class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="../Index.html" target="_parent">Inicio</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovel/automovel.html" target="_parent">Automovel</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="auto_cad.php" target="_parent">Cadastro</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovelMaira/aut_cons1.php" target="_parent">Ler</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovel/auto_alt_cons.php" target="_parent">Atualizar</a>
        </div>
        <div class="nav-item">
          <a class="nav-link text-white" href="../automovelMaira/aut_del.php" target="_parent">Deletar</a>
        </div>
    </div>

    </nav>
<body>
  
    <center>
   
    <figure class="text-center">
    <blockquote class="blockquote">
        <p>Corretora SENAC</p>
    </blockquote>
    <figcaption class="blockquote-footer">
       Acidentes não acontecem por acaso,<cite title="Source Title"> mas por descaso!</cite>
    </figcaption>
</figure>
  
    <div class="card mb-3">
  <img src="https://www.minutoseguros.com.br/blog/wp-content/uploads/2022/04/carros-pra-familia.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Corretora SENAC</h5>
    <p class="card-text">Acidentes não tem hora marcada! Cadastre o Seu Veículo!</p>
    <p class="card-text"><small class="text-muted"></small></p>
  </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.new5.oestecarros.com.br/storage/0_banner-principal1_d30784b6.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Cuide do seu Patrimônio</h5>
        <p class="card-text">Acidentes não tem hora marcada! Cadastre o Seu Veículo!</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>

    <?php 
         if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
         }   
         ?> 
         
<div>
  <div class="fundo">
    <div class="cadastro" class="form-container">
        <form method="post" action="auto_cad_pro.php" name="formulario"> 
          <br><br>
            <label>RENAVAM:</label><br>
            <input type="number" name="renavam" required minlegth="11" maxlength="11" placeholder="Digita o RENAVAM" id="renavam"><br><br>
            <label>PLACA:</label><br>
            <input type="text" name="placa" required minlength="10" maxlength="10" placeholder="Digite a PLACA" id="placa"><br><br>
            <label>FABRICANTE</label><br>
            <input type="text" name="fabricante" required minlenght="4" maxlength="20" placeholder="Digite o FABRICANTE" id="fabricante"><br><br>
            <label>ANO:</label><br>
            <input type="number" name="ano" required minlenght="4" maxlength="4" placeholder="Digite o ANO 0000" id="ano"><br><br>
            <label>MODELO:</label><br>
            <input type="text" name="modelo" required minlength="1" maxlength="10" placeholder="Digite o MODELO" id="modelo"><br><br>
            <input type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-dark" onclick="valida()">
        </form>
        <br>
        <br>
        <br>
        <hr>
    </div>
    </div></div>
    <div class="container-fluid">
        <footer class="py-5">
          <div class="row">
            <div class="col-2">
              <h5>NAV</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="../automovel/automovel.html" class="nav-link p-0 text-muted">Início</a></li>
                <li class="nav-item mb-2"><a href="auto_cad.php" class="nav-link p-0 text-muted">Cadastrar Veículo</a></li>
                <li class="nav-item mb-2"><a href="../automovelMaira/aut_cons1.php" class="nav-link p-0 text-muted">Visualizar Veículo</a></li>
                <li class="nav-item mb-2"><a href="../automovel/auto_alt_cons.php" class="nav-link p-0 text-muted">Atualizar Veículo</a></li>
                <li class="nav-item mb-2"><a href="../automovelMaira/aut_del.php" class="nav-link p-0 text-muted">Deletar Veículo</a></li>
              </ul>
            </div>
      

      
            <div class="col-4 offset-1">
              
                <h5>Obrigado por cadastrar o seu Automóvel na Corretora SENAC!</h5>
                <p></p>
              
            </div>
          
      
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>Â© <script>
              var year = new Date();
              document.writeln(+year.getUTCFullYear());
          </script>  Company, Inc. All rights reserved.</p>
          </div>
        </footer>
      </div>
    </center>
    <script type="text/javascript">
      
        function valida(){
       
            if (document.formulario.renavam.value == ''){
                window.alert('Preencha o campo do Renavam!');
                document.getElementById(renavam).focus();
            }if(document.formulario.placa.value == ''){
                window.alert('Preencha o campo Placa!');
                document.getElementById(placa).focus();
            } if (document.formulario.fabricante.value == ''){
                window.alert('Preencha o campo do Fabricante!');
                document.getElementById(fabricante).focus();
            }if(document.formulario.ano.value == ''){
                window.alert('Preencha o campo Ano!');
                document.getElementById(ano).focus();
            }if(document.formulario.modelo.value == ''){
                window.alert('Preencha o campo Modelo!');
                document.getElementById(modelo).focus();
            }
        }
    </script>
</body>
</html>
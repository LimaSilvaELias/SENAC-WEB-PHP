<?php
    session_start();
    include_once("../conexao.php");


    $renavam = filter_input (INPUT_POST, 'renavam', FILTER_SANITIZE_NUMBER_INT);
    $placa = filter_input (INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
    $fabricante = filter_input (INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
    $ano = filter_input (INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);

    $renavam = $_POST['renavam'];
    $ano = $_POST['ano'];

    if (strlen($renavam) != 11) {
		$_SESSION['msg']="<h2><p style='color: red;'>RENAVAM INVÁLIDO, DIGITE OS 11 NÚMEROS DO RENAVAM!</p></h2";
        
	}else if (strlen($ano) != 4) {
		$_SESSION['msg']="<h2><p style='color: red;'>ANO INVÁLIDO, DIGITE OS 4 NÚMEROS DO ANO!</p></h2";
        
	}else{
    $result_cliente = "INSERT INTO e2_automovel(renavam, placa, fabricante, ano, modelo) VALUES('$renavam','$placa','$fabricante','$ano','$modelo');";
    $resultado = mysqli_query($conn, $result_cliente);

    if($conn->affected_rows == 1){
        $_SESSION['msg']="<h2><p style='color: green;'>Automóvel Cadastrado com Sucesso!</p></h2>";
    }else{
        $_SESSION['msg'] ="<h2><p style='color: red;'>Erro ao Cadastrar o Automóvel!</p></h2";
    }
    
}
    header("Location:auto_cad.php");
?>


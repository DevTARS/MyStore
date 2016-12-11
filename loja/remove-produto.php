<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");
?>
<?php
	$id = $_POST['id'];

	if(removeProduto($conexao, $id)){ 
		header("Location: produto-listar.php?removido=true");
		die();
	} else { 
		$msg = mysqli_error($conexao);
?>
		<p class="text-danger">Produto <?=$id?> não foi removido.</p>
		<p><?=$msg?></p>
<?php 
	}

?>
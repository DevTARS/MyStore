<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");
?>

<?php

	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	if (array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}

	if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
		<p class="text-sucess">Produto <?php echo $nome ?> de R$<?php echo $preco ?> adicionado com sucesso!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		?>
		<p class="text-danger">Produto <?php echo $nome ?> não foi inserido.</p>
		<p><?=$msg ?></p>
	<?php }
?>

<?php include("rodape.php"); ?>
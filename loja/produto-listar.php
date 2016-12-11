<?php 
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-produto.php"); 
//	include("banco-categoria.php");
?>

<h1>Produtos</h1>

<?php 
	if(array_key_exists("removido", $_GET) && $_GET['removido']==true) {
?>
	<p class="alert-success">Produto apagado com sucesso!</p>
<?php
	}
	$produtos = listaProdutos($conexao);
?>
	<table class="table table-striped table-bordered">
	<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td><?=$produto['nome']; ?></td>
				<?php if($produto['usado']) { ?>
					<td>Usado</td>
				<?php } else { ?>
					<td>Novo</td>
				<?php } ?>
				<td>R$ <?=$produto['preco']; ?></td>
				<td><?=substr($produto['descricao'], 0, 50)?></td>
				<td><?=utf8_encode($produto['categoria']); ?></td>
				<td>
					<a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a>
				</td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-danger">remover</button>
					</form>
				</td>
			</tr>
	<?php endforeach ?>
	</table>

<?php include("rodape.php"); ?>
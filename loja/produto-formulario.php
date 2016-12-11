<?php
	include("cabecalho.php"); 
	include("conecta.php");
	include("banco-categoria.php");

	$categorias = listaCategorias($conexao);
?>

<h1>Formulário de Cadastro</h1>
<form action="adiciona-produto.php" method="post">
	
	<table class="table">
		<tr>
			<td>Nome: </td>
			<td><input class="form-control" type="text" name="nome"></td>
		</tr>
		<tr>
			<td>Preço: </td>
			<td><input class="form-control" type="numeric" name="preco"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="usado"> Usado</td>
		</tr>
		<tr>
			<td>Categoria: </td>
			<td>
				<select name="categoria_id" class="form-control">
				<?php foreach($categorias as $categoria) : ?>
					<option value="<?=$categoria['id']?>">
						<?=utf8_encode($categoria['nome'])?>
					</option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Descrição: </td>
			<td>
				<textarea class="form-control" name="descricao"></textarea>
			</td>
		</tr>
		<br>
		<tr>
			<td><input class="btn btn-primary" type="submit" value="cadastrar"></td>
		</tr>
	</table>

</form>

<?php include("rodape.php"); ?>
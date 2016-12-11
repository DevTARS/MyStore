<?php include("cabecalho.php"); ?>

	<h1>Bem Vindo !</h1>

	<h2>Login</h2>
<?php if (isset($_GET["login"]) && $_GET["login"]==1) { ?>
	<p class="alert-success">Logado com sucesso!</p>
<?php } else if(isset($_GET["login"]) && $_GET["login"]==0) { ?>
	<p class="alert-danger">Usuário ou senha inválida!</p>
<?php } ?>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary" type="submit">Login</button></td>
			</tr>
		</table>
	</form>

<?php include("rodape.php"); ?>
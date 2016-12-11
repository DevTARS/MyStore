<?php 

	function listaCategorias ($conexao){
		$resultado = mysqli_query($conexao, "select * from categorias");
		$categorias = array();

		while ($categoria = mysqli_fetch_assoc($resultado)) {
			array_push($categorias, $categoria);
		}
		return $categorias;
	}

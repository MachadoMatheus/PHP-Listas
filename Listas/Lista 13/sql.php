<?php 
class Mysql
{
	
	public function abrirConexao()
	{
		$mysqli = mysqli_connect("localhost", "root", "123456");

		if (mysqli_connect_errno()) {
			echo "Deu ruim amigo: <br>".trigger_error(mysqli_connect_error());
			return $mysqli;
		} else {
			echo "Deu bom \|/";
			return 0;
		}
	}

	public function criarBanco($nomeDoBanco)
	{
		$mysqli = Mysql::abrirConexao();
		$comando = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";

		$query = $mysqli->query($comando);

		if ($query) {
			echo "<br> Execução realizada com sucesso";	
		} else {
			echo "O banco $nomeDoBanco não pode ser criado";
		}
	}
}

?>
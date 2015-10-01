<?php  
require_once('AccesoDatos.php');

class Voto
{
	public $dni;
	public $candidato;
	public $provincia;
	public $sexo;

	public static function TraerTodos()
	{

	}
	public function Alta()
	{
		$objetoAcceso = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('CALL Alta(:dni, :provincia, :candidato, :sexo)');
		$consulta->bindValue(':dni', $this->dni, PDO::PARAM_INT);
		$consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
		$consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
		$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
		$consulta->execute();
	}
}
?>
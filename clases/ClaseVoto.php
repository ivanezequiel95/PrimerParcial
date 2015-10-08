<?php  
require_once('AccesoDatos.php');

class Voto
{
	public $dni;
	public $candidato;
	public $provincia;
	public $sexo;
	public $localidad;
	public $direccion;

	public static function TraerTodos()
	{
		$objetoAcceso = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('CALL TraerTodos()');
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, 'Voto');
	}
	public function Alta()
	{
		$objetoAcceso = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAcceso->RetornarConsulta('CALL Alta(:dni, :provincia, :candidato, :sexo, :localidad , :direccion)');
		$consulta->bindValue(':dni', $this->dni, PDO::PARAM_INT);
		$consulta->bindValue(':provincia', $this->provincia, PDO::PARAM_STR);
		$consulta->bindValue(':candidato', $this->candidato, PDO::PARAM_STR);
		$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
		$consulta->bindValue(':localidad', $this->localidad, PDO::PARAM_STR);
		$consulta->bindValue(':direccion', $this->direccion, PDO::PARAM_STR);
		$consulta->execute();
	}
}
?>
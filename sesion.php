<?php 

	$login = $_GET['User'];
	$contrasena = $_GET['contra'];
	
	$ingreso= new Ingreso();
	if($ingreso->evaluar($login, $contrasena)){
		header("Location:sesiones.php");
	}else{
		header("Location:login.php");
	}


class Ingreso
{
	private $usuario;
	private $contrasena;
	
	public function Ingreso()
	{
		$this->usuario = 'root';
		$this->contrasena='asdfkl';
	}
	
	public function evaluar($login, $contrasena)
	{
		return($login==$this->usuario && $contrasena==$this->contrasena);	
	}
}
?>
	
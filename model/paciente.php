<?php
class Paciente
{
	private $pdo;  
	public $idPaciente;
	public $folio;
	public $fecIngreso;
	public $nombre; 
	public $apePat;
	public $apeMat;
	public $calle;
	public $numero;
	public $colonia;
	public $codPos;
	public $localidad;
	public $estado;
	public $telCasa;
	public $telCel; 
	public $fecNacimiento; 
	public $lugNacimiento;  
	public $edad; 
	public $sexo;  
	public $ocupacion;
	public $estCivil;
	public $perResp;
	public $motConsulta;
	
	public function __CONSTRUCT()
	{
		$this->pdo = Database::StartUp();
	}

	public function Listar()
	{
		$stm = $this->pdo->prepare("SELECT idPaciente, folio, nombre, apePat, apeMat, calle, numero, colonia, codPos, localidad, estado, telCasa, telCel FROM pacientes");

		$stm->execute(array());

		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function ListarInfoPaciente($id)
	{
		$stm = $this->pdo->prepare("SELECT * FROM pacientes where idPaciente = ?");
		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);
	}


	public function Eliminar($id)
	{
		$stm = $this->pdo
		->prepare("DELETE FROM pacientes WHERE folio = ?");			          

		$stm->execute(array($id));
	}
	
	public function Actualizar(Paciente $data)
	{
		$sql = "UPDATE pacientes SET 
		idPaciente = ?,
		folio = ?,
		fecIngreso = ?,
		nombre = ?,
		apeMat = ?,
		apePat = ?,
		calle = ?, 
		numero = ?, 
		colonia = ?, 
		codPos = ?, 
		localidad = ?, 
		estado = ?, 
		telCasa = ?, 
		telCel = ?, 
		fecNacimiento = ?, 
		lugNacimiento = ?, 
		edad = ?, 
		sexo = ?, 
		ocupacion = ?, 
		estCivil = ?, 
		perResp = ?, 
		motConsulta = ?  
		WHERE idPaciente = ?";

		$this->pdo->prepare($sql)
		->execute(
			array(
				$data->idPaciente,
				$data->folio,
				$data->fecIngreso, 
				$data->nombre,
				$data->apeMat,
				$data->apePat, 
				$data->calle,
				$data->numero,
				$data->colonia,
				$data->codPos,
				$data->localidad,
				$data->estado, 
				$data->telCasa, 
				$data->telCel, 
				$data->fecNacimiento,
				$data->lugNacimiento,
				$data->edad,
				$data->sexo,
				$data->ocupacion,
				$data->estCivil,
				$data->perResp,
				$data->motConsulta,
				$data->idPaciente
				)
			);
	}

	public function Registrar(Paciente $data)
	{
		$sql = "INSERT INTO pacientes
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		->execute(
			array(
				null,
				$data->folio,
				$data->fecIngreso, 
				$data->nombre,
				$data->apePat,
				$data->apeMat, 
				$data->calle,
				$data->numero,
				$data->colonia,
				$data->codPos,
				$data->localidad,
				$data->estado, 
				$data->telCasa, 
				$data->telCel, 
				$data->fecNacimiento,
				$data->lugNacimiento,
				$data->edad,
				$data->sexo,
				$data->ocupacion,
				$data->estCivil,
				$data->perResp,
				$data->motConsulta
				)
			);
	}

	public function Obtener($id)
	{
		$stm = $this->pdo
		->prepare("SELECT * FROM pacientes WHERE idPaciente = ?");
		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);
	}

	public function verificaPaciente($nombre, $apePat, $apeMat)
	{
		$sql= $this->pdo->prepare("SELECT * FROM pacientes WHERE nombre = ? AND apePat = ? AND apeMat = ?");
		$resultado=$sql->execute(
			array($nombre, $apePat, $apeMat)
		);
		return $sql->fetch(PDO::FETCH_OBJ,PDO::FETCH_ASSOC);
	}
}
<?php
class Agenda
{
	private $pdo;
	public $idCita;
	public $idPaciente;
	public $fecha;
	public $hora;
	public $diagnostico;

	public function __CONSTRUCT()
	{
		$this->pdo = Database::StartUp();     
	}

	public function ObtenerAgenda($id)
	{
		$stm = $this->pdo
		->prepare("SELECT * FROM agenda WHERE idAgenda = ?");

		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);
	}

	public function EliminarAgenda($id)
	{
		$stm = $this->pdo
		->prepare("DELETE FROM agenda WHERE idAgenda = ?");

		$stm->execute(array($id));
	}

	public function Actualizar(Agenda $data)
	{
		$sql = "UPDATE agenda SET
		nombre = ?, edad = ?, telefono = ? ,fecha =? ,hora =? ,diagnostico =?

		WHERE idAgenda = ?";
		$this->pdo->prepare($sql)
		->execute(
			array(
				$data->nombre,
				$data->edad,
				$data->telefono,
				$data->fecha,
				$data->hora,
				$data->diagnostico,
				$data->idAgenda
				)
			);
	}

	public function Registrar(Agenda $data)
	{
		$sql = "INSERT INTO agenda
		VALUES (?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		->execute(
			array(
				null,
				$data->nombre,
				$data->edad,
				$data->telefono,
				$data->fecha,
				$data->hora,
				$data->diagnostico
				)
			);
	}
	public function ListarTodos()
	{
		$stm = $this->pdo->prepare("SELECT * FROM citas");
		$stm->execute(array());

		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

    public function ListarCitas()
	{
		$stm = $this->pdo->prepare("SELECT pacientes.nombre, pacientes.folio, citas.diagnostico, citas.hora FROM pacientes, citas WHERE pacientes.idPaciente = citas.idPaciente");
		$stm->execute(array());
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}

	public function ListarPacientes()
	{
		$stm = $this->pdo->prepare("SELECT idPaciente, nombre, apPat, apMat FROM pacientes");
		$stm->execute(array());
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
}

<?php

require_once 'classes/Crud.php';

class Buscar extends Crud{
	
	protected $table = 'ocorrencias';
	private $hora_ocorrencia;
	private $data_ocorrencia;
	private $descricao;


	public function setTipo_ocorrencia($tipo_ocorrencia){
		$this->tipo_ocorrencia = $tipo_ocorrencia;
	}

	public function getTipo_ocorrencia(){
		return $this->tipo_ocorrencia;
	}

	public function setData_ocorrencia($data_ocorrencia){
		$this->data_ocorrencia = $data_ocorrencia;
	}

	public function getData_ocorrencia(){
		return $this->data_ocorrencia;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDescricao (){
		return $this->descricao;
	}

	public function select($id_ocorrencia){

	$sql ="SELECT data_ocorrencia, tipo_ocorrencia, descricao FROM $this->table";
	$stmt = DB::prepare($sql);
	$stmt->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
	$stmt->execute();
	return $stmt->fetch();
	}
}
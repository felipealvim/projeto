<?php

require_once 'classes/Crud.php';

class Ocorrencias extends Crud{
	
	protected $table = 'ocorrencias';
	private $tipo_ocorrencia;
	private $data_ocorrencia;
	private $descricao;
	private $local;


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

	public function setLocal($local){
		$this->local = $local;
	}

	public function getLocal (){
		return $this->local;
	}
	public function insert(){

		$sql  = "INSERT INTO $this->table (tipo_ocorrencia, data_ocorrencia, descricao, local) VALUES (:tipo_ocorrencia, :data_ocorrencia, :descricao, :local)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':tipo_ocorrencia', $this->tipo_ocorrencia);
		$stmt->bindParam(':data_ocorrencia', $this->data_ocorrencia);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':local', $this->local);
		
		return $stmt->execute(); 

	}

	public function update($id_ocorrencia){

		$sql  = "UPDATE $this->table SET tipo_ocorrencia = :tipo_ocorrencia, descricao = :descricao, data_ocorrencia = :data_ocorrencia, local = :local WHERE id_ocorrencia = :id_ocorrencia";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':tipo_ocorrencia', $this->tipo_ocorrencia);
		$stmt->bindParam(':data_ocorrencia', $this->data_ocorrencia);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':local', $this->local);
		$stmt->bindParam(':id_ocorrencia', $id_ocorrencia);
		return $stmt->execute();

	}

}
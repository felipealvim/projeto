<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id_ocorrencia);

	public function find($id_ocorrencia){
		$sql  = "SELECT * FROM $this->table WHERE id_ocorrencia = :id_ocorrencia";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll(){
		$sql  = "SELECT * FROM $this->table";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_ocorrencia){
		$sql  = "DELETE FROM $this->table WHERE id_ocorrencia = :id_ocorrencia"; // DELETE FROM `sistema`.`ocorrencias` WHERE `ocorrencias`.`id_ocorrencia` = 4;
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_ocorrencia', $id_ocorrencia, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}
<?php

require_once 'classes/Crud2.php';

class Cadastro extends Crud2{
	
	protected $table = 'usuario';
	private $nome;
	private $senha;
	private $email;


	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail (){
		return $this->email;
	}

	public function insert(){

		$sql  = "INSERT INTO  $this->table (nome, senha, email) VALUES (:nome, :senha,:email)";
		//"INSERT INTO $this->table (tipo_ocorrencia, data_ocorrencia, descricao, tipo) VALUES (:tipo_ocorrencia, :data_ocorrencia, :descricao, :tipo)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':email', $this->email);
		
		return $stmt->execute(); 

	}

	
}
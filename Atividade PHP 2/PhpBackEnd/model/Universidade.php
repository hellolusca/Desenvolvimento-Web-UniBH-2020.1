<?php

include __DIR__.'/Conexao.php';

class Universidade extends Conexao {
    private $id; 
	private $nome;
    private $campus;    

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function getCampus() {
        return $this->campus;
    }

    public function setCampus($campus) {
        $this->campus = $campus;
        return $this;
    }
    
    public function insert($obj){    
    	$sql = "INSERT INTO Universidade(nome,campus) VALUES (:nome,:campus)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('nome',  $obj->nome);
        $consulta->bindValue('campus' , $obj->campus);
    	$consulta->execute();
        return Conexao::lastId();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE Universidade SET 
            nome = :nome, 
            campus = :campus,
        WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('nome', $obj->nome);
        $consulta->bindValue('campus' , $obj->campus);
        $consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM Universidade WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id = null){
        $sql =  "SELECT * FROM Universidade WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id',$id);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM Universidade";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>
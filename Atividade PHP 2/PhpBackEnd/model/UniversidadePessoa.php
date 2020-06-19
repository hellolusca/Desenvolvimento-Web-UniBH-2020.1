<?php

include __DIR__.'/Conexao.php';

class UniversidadePessoa extends Conexao {
    private $idpessoa; 
	private $iduniversidade;

    public function getIdPessoa() {
        return $this->idpessoa;
    }

    public function setIdPessoa($idpessoa) {
        $this->idpessoa = $idpessoa;
    }

    public function getIdUniversidade() {
        return $this->iduniversidade;
    }
    public function setIdUniversidade($iduniversidade) {
        $this->iduniversidade = $iduniversidade;
        return $this;
    }
    
    public function insert($obj){    
    	$sql = "INSERT INTO Universidade_pessoas(id_pessoa,id_universidade) VALUES (:idpessoa,:iduniversidade)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('idpessoa',  $obj->id_pessoa);
        $consulta->bindValue('iduniversidade' , $obj->id_universidade);
    	$consulta->execute();
        return Conexao::lastId();
	}

	public function update($obj,$id_pessoa = null){
		$sql = "UPDATE Universidade_pessoas SET 
            id_pessoa = :idpessoa, 
            id_universidade = :iduniversidade,
        WHERE id_pessoa = :id_pessoa ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('idpessoa', $obj->id_pessoa);
        $consulta->bindValue('iduniversidade' , $obj->id_universidade);
        $consulta->bindValue('id_pessoa', $id_pessoa);
		return $consulta->execute();
	}

	public function delete($obj,$id_pessoa = null){
		$sql =  "DELETE FROM Universidade_pessoas WHERE id_pessoa = :idpessoa";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('idpessoa',$id_pessoa);
		$consulta->execute();
        return $consulta->execute();
	}

	public function find($id_universidade){
        $sql =  "SELECT id_pessoa FROM universidade_pessoas WHERE id_universidade = :iduniversidade";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('iduniversidade',$id_universidade);
        $consulta->execute();
        return $consulta->fetch();
	}

	public function findAll(){
		$sql = "SELECT * FROM universidade_pessoas";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}
}
?>
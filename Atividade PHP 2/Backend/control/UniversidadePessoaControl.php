<?php
include __DIR__.'/../model/UniversidadePessoa.php';

class UniversidadePessoaControl{
	function insert($obj){		
		$universidadepessoa = new UniversidadePessoa();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $universidadepessoa->insert($obj);		
	}

	function update($obj,$id){
		$universidadepessoa = new UniversidadePessoa();
		return $universidadepessoa->update($obj,$id);
	}

	function delete($obj,$id){
		$universidadepessoa = new UniversidadePessoa();
		return $universidadepessoa->delete($obj,$id);
	}

	function find($id_universidade = null){
		$universidadepessoa = new UniversidadePessoa();
		return $universidadepessoa->find($id_universidade);
	}

	function findAll(){
		$universidadepessoa = new UniversidadePessoa();
		return $universidadepessoa->findAll();
	}
}

?>
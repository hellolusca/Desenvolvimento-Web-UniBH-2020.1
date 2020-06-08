<?php
    class Professor {
        private $nome;
        private $idade;
        private $matricula;

        public function __construct($nome,$idade,$matricula) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
        }

        public function className() {
            return __CLASS__;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

    }

    class ProfessorHorista extends Professor {
        private $salario;

        public function __construct($nome,$idade,$matricula,$salario) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->salario = $salario;

        }

        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($salario) {
            $this->salario = $salario;
        }
    }

    class ProfessorFixo extends Professor {
        private $horasTotais;
        private $valorHora;
        private $salarioTotal;

        public function __construct($nome,$idade,$matricula,$salarioTotal,$valorHora,$horasTotais) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->salarioTotal = $salarioTotal;
            $this->horasTotais = $horasTotais;
            $this->valorHora = $horasTotais;
        }

        public function getHorasTotais() {
            return $this->horasTotais;
        }

        public function setHorasTotais($horasTotais) {
            $this->horasTotais = $horasTotais;
        }

        public function getValorHora() {
            return $this->valorHora;
        }

        public function setValorHora($valorHora) {
            $this->valorHora = $valorHora;
        }

        public function calculaSalario() {
            $valor = $this->valorHora * $this->horasTotais;
            $this->salarioTotal = $valor;
            return $this->salarioTotal;
        }
    }
?>
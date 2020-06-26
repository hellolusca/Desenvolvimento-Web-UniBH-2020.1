<?php
    class SuperHeroi {
        private $id;
        private $nome;
        private $poderEspecial;
        private $energia;
        private $forca;
        private $origem;
        private $poderMedio;

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
        }

        public function getPoderEspecial() {
            return $this->poderEspecial;
        }

        public function setPoderEspecial($poder) {
            $this->poderEspecial = $poder;
        }

        public function getEnergia() {
            return $this->energia;
        }

        public function setEnergia($energia) {
            $this->energia = $energia;
        }

        public function getForca() {
            return $this->forca;
        }

        public function setForca($forca) {
            $this->forca = $forca;
        }

        public function getOrigem() {
            return $this->origem;
        }

        public function setOrigem($origem) {
            $this->origem = $origem;
        }

        public function aumentarEnergia($ra) {
            $poderTotal = $this->poderEspecial * $ra;
            $this->poderEspecial = $poderTotal;
        }

        public function calcularPoderMedio() {
            $poderMedio = (($this->energia + $this->forca) / 2);
            $this->poderMedio = $poderMedio;
            return $poderMedio;
        }
    }

    //Harry Potter
    $harry = new SuperHeroi;
    $harry->setId(1);
    $harry->setNome("Harry Potter");
    $harry->setPoderEspecial(20000);
    $harry->setEnergia(20000);
    $harry->setForca(20000);
    $harry->setOrigem("Rua dos Alfeneiros, n° 4");
    $harry->aumentarEnergia(120114570);
    $harry->calcularPoderMedio();

    //Goku
    $goku = new SuperHeroi;
    $goku->setId(2);
    $goku->setNome("Goku");
    $goku->setPoderEspecial(10000);
    $goku->setEnergia(10000);
    $goku->setForca(10000);
    $goku->setOrigem("Planeta Vegeta");
    $goku->aumentarEnergia(120114570);
    $goku->calcularPoderMedio();

    //Capitão América
    $capitaoAmerica = new SuperHeroi;
    $capitaoAmerica->setId(3);
    $capitaoAmerica->setNome("Capitão América");
    $capitaoAmerica->setPoderEspecial(15000);
    $capitaoAmerica->setEnergia(15000);
    $capitaoAmerica->setForca(15000);
    $capitaoAmerica->setOrigem("USA");
    $capitaoAmerica->aumentarEnergia(120114570);
    $capitaoAmerica->calcularPoderMedio();

    //Iron Man
    $ironMan = new SuperHeroi;
    $ironMan->setId(4);
    $ironMan->setNome("Iron Man");
    $ironMan->setPoderEspecial(5000);
    $ironMan->setEnergia(5000);
    $ironMan->setForca(5000);
    $ironMan->setOrigem("USA");
    $ironMan->aumentarEnergia(120114570);
    $ironMan->calcularPoderMedio();

    echo $harry;
    echo $goku;
    echo $capitaoAmerica;
    echo $ironMan;
?>
<?php
    class Usuario {
        private $username = "hellolusca";
        private $password = "abc@123";

        public function getUsername() {
            return $this->username;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function validarSenha($senha) {
            if ($this->password === $senha) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
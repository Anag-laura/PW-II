<?php

    class Usuario{
        // Declarar os atributos //
        private $idUsuario;
        private $nome;
        private $email;
        private $senha;
        private $ativo;


        // Método Construtor // 
        public function __construct($id, $n, $e, $s, $a){
            $this->idUsuario = $id;
            $this->nome = $n;
            $this->email = $e;
            $this->senha = $s;
            $this->ativo = $a;
        }

        // Métodos de acesso get set //
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function getNome(){
            return $this->Nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }

        public function getEmail(){
            return $this->Email;
        }
        public function setEmail($e){
            $this->Email = $e;
        }

        public function getSenha(){
            return $this->Senha;
        }
        public function setSenha($s){
            $this->Senha = $s;
        }

        public function getAtivo(){
            return $this->Ativo;
        }
        public function setAtivo($a){
            $this->Ativo = $a;
        }



    }

?>
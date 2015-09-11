<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class usuario extends Pessoa{
            private $login;
            private $senha;
            private $permicao;
            private $token;
            private $venda;
            private $fornecedor;
            private $produto;
              
            function _constuct($login,$senha,$token){
                $this-> login=$login;
                $this->senha= $senha;
                $this->token=$token;
            } 
            
            function getLogin() {
                return $this->login;
            }

            function getSenha() {
                return $this->senha;
            }

            function getPermicao() {
                return $this->permicao;
            }

            function setLogin($login) {
                $this->login = $login;
            }

            function setSenha($senha) {
                $this->senha = $senha;
            }

            function setPermicao($permicao) {
                $this->permicao = $permicao;
            }

            
              function getToken() {
                return $this->token;
            }

            function getVenda() {
                return $this->venda;
            }

            function setToken($token) {
                $this->token = $token;
            }

            function setVenda($venda) {
                $this->venda = $venda;
            }
            
            function getFornecedor() {
                return $this->fornecedor;
            }

            function setFornecedor($fornecedor) {
                $this->fornecedor = $fornecedor;
            }
            
            
            function getProduto() {
                return $this->produto;
            }

            function setProduto($produto) {
                $this->produto = $produto;
            }
            
           function Logar(){
             
           }   
        
    }
    
?>
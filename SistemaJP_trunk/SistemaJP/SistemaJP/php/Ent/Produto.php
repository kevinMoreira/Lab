<?php
	class Produto{
			private $nome;
			private $valor;
			private $categoria;
			private $fornecedor;
                  

                         function __construct($nome, $valor, $categoria, $fornecedor) {
                            $this->nome = $nome;
                            $this->valor = $valor;
                            $this->categoria = $categoria;
                            $this->fornecedor=$fornecedor;
                        }

                        function getNome() {
                            return $this->nome;
                        }

                        function getValor() {
                            return $this->valor;
                        }

                        function getCategoria() {
                            return $this->categoria;
                        }

                        function setNome($nome) {
                            $this->nome = $nome;
                        }

                        function setValor($valor) {
                            $this->valor = $valor;
                        }

                        function setCategoria($categoria) {
                            $this->categoria = $categoria;
                        }
                        
                        function getFornecedor() {
                            return $this->fornecedor;
                        }

                        function setFornecedor($fornecedor) {
                            $this->fornecedor = $fornecedor;
                        }

	
	}

	
?>
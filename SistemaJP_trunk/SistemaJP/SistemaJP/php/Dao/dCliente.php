<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../MySQL.php');
require_once('../Ent/eEndereco.php');


    class dCliente{
       private function Salvar(Cliente $cliete){
                $conexao= new MySql();
                $objCliente = new Cliente();
                $sql="set @nome='$cliete->getNome;    
                       set @cpf='$cliete->getCpf';
                       set @data_nascimento='$cliete->getDataNasc()';
                       set @telefone='$cliete->getTelefone()';
                       set @celular='$cliete->getCelular()';
                       set @email='$cliete->getEmail()';
                       set @cep='$cliete->getCep()';
                       set @endereco='$cliete->getEndereco()'; 
                       set @numero='$cliete->getNumero()';
                       set @complemento='$cliete->getComplemento()';
                       set @bairro='$cliete->getBairro()';
                       set @cidade='$cliete->getCidade()';
                       set @uf='$uf->getUf()';
                       call USP_MANTER_CLIENTES(@nome,@cpf,@data_nasc,
                       @telefone,@celular,@email,@cep,@endereco,@numero,
                       @complemento,@bairro,@cidade,@uf,NULL,NULL,0);";
               $retorno = $conexao->execSP($sql);
           }
           
            private function Atualizar(Cliente $cliete){
             $conexao= new MySql();
             $objCliente = new Cliente();
            //Seleciona endereÃ§o na base
            $sql="set @nome='$cliete->getNome;    
                       set @cpf='$cliete->getCpf';
                       set @data_nascimento='$cliete->getDataNasc()';
                       set @telefone='$cliete->getTelefone()';
                       set @celular='$cliete->getCelular()';
                       set @email='$cliete->getEmail()';
                       set @cep='$cliete->getCep()';
                       set @endereco='$cliete->getEndereco()'; 
                       set @numero='$cliete->getNumero()';
                       set @complemento='$cliete->getComplemento()';
                       set @bairro='$cliete->getBairro()';
                       set @cidade='$cliete->getCidade()';
                       set @uf='$uf->getUf()';
                       call USP_MANTER_CLIENTES(@nome,@cpf,@data_nasc,
                       @telefone,@celular,@email,@cep,@endereco,@numero,
                       @complemento,@bairro,@cidade,@uf,NULL,NULL,0);";
               $retorno = $conexao->execSP($sql);
            }
            
            
    
    
    }
?>
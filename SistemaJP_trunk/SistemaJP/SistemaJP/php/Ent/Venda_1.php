<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    class Venda{
        
         private $quantidade;
         private $subtotal;
         private $totalParcelas;
         private $cliente;
         private $produto;
         
         function __construct($quantidade, $subtotal, $totalParcelas, $cliente, $produto) {
             $this->quantidade = $quantidade;
             $this->subtotal = $subtotal;
             $this->totalParcelas = $totalParcelas;
             $this->cliente = $cliente;
             $this->produto = $produto;
         }

         
         function getCliente() {
             return $this->cliente;
         }

         function getProduto() {
             return $this->produto;
         }

         function setCliente($cliente) {
             $this->cliente = $cliente;
         }

         function setProduto($produto) {
             $this->produto = $produto;
         }
         
         function getQuantidade() {
             return $this->quantidade;
         }

         function getSubtotal() {
             return $this->subtotal;
         }

         function getTotalParcelas() {
             return $this->totalParcelas;
         }

         function setQuantidade($quantidade) {
             $this->quantidade = $quantidade;
         }

         function setSubtotal($subtotal) {
             $this->subtotal = $subtotal;
         }

         function setTotalParcelas($totalParcelas) {
             $this->totalParcelas = $totalParcelas;
         }

         
         function gerarRelatorio(){
             
         }
         
         function calcularVenda(){
             
         }
         
         function calcularParcelas(){
             
         }
         
         function  gerarGrafico(){
             
         }
         
        
    }

?>

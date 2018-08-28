<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author Willian
 * 
 */// definição da classe Cliente
  class Cliente{
    private $nome;
    
    public function definir_nome($nome){
      $this->nome = $nome;
    }

    public function obter_nome(){
      return $this->nome;
    }
  }
  // fim definição da classe Cliente

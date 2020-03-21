//Exercício 3

<?php

class Produto{
  public $nome;
  public $preco;
  public $quantidade;
  public $pagar;
  public $desconto;
  public function Produto($n,$p,$q){
    $this->nome = $n;
    $this->preco= $p;
    $this-> quantidade = $q;
    $this->pagar = $this->preco * $this->quantidade;
      if($this->quantidade >=11 and $this->quantidade <=20){
        $this->desconto= "10%";
        $desc = ($this->pagar*10)/100;
        $this->pagar = $this->pagar - $desc;
        
      }
      elseif($this->quantidade >=21 and $this->quantidade<=50){
        $this->desconto= "20%";
        $desc = ($this->pagar*20)/100;
        $this->pagar = $this->pagar - $desc;
      }
      elseif($this->quantidade >50){
        $this->desconto= "25%";
        $desc = ($this->pagar*25)/100;
        $this->pagar = $this->pagar - $desc;
      }
      else{
        $this->desconto = 0;
      }
  }
}

$p1 = new Produto("Camiseta",35.99,15);
  print_r($p1);

$p2 = new Produto("Tênis",350.00,5);
  print_r($p2);

$p3 = new Produto("Celular",2000.00,10);
  print_r($p3);
  ?>

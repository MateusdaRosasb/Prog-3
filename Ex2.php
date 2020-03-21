<?php

class Empregado{
  public $primeiroNome;
  public $sobrenome;
  public $salarioMensal;
  public $salarioAnual;

  public function __construct(){
    $this-> primeiroNome = "Ronaldinho";
    $this-> sobrenome = "Gaúcho";
    $this-> salarioMensal = 5000000.00;
  }
  public function setPrimeiroNome($recebe){
    return $this->primeiroNome = $recebe;
  }
  public function getPrimeiroNome(){
    return $this ->primeiroNome;
  }
  public function setSobrenome($recebe1){
    return $this->sobrenome = $recebe1;
  }
  public function getSobrenome(){
    return $this ->sobrenome;
  }
  public function setSalarioMensal($recebe2){
    return $this->salarioMensal = $recebe2;
  }
  public function getSalarioMensal(){
    return $this ->salarioMensal;
  }
  public function setSalarioAnual(){
    
    return $this->salarioAnual = $this->salarioMensal*12;
  }
  public function getSalarioAnual(){
    return $this ->salarioAnual;
  }
  public function validaSalarioMensal(){
    if($this->salarioMensal < 0){
      $this->salarioMensal = 0.0;
    }
  }
  public function aumentaSalarioMensal(){
    $porc = ($this->salarioMensal*10)/100;
    $this-> salmen = $this->salarioMensal + $porc;
  }
}

//empregado 1
$emp1 = new Empregado();
$emp1->validaSalarioMensal();
$emp1->setSalarioAnual();
echo "O salario anual de {$emp1-> getPrimeiroNome()} {$emp1->getSobrenome()} é R$ {$emp1->getSalarioAnual()}\n"; 
$emp1 ->aumentaSalarioMensal();
$emp1->setSalarioAnual();
echo "O salario anual de {$emp1-> getPrimeiroNome()} recebeu acrescimo de 10% e agora é de R$ {$emp1->getSSalarioAnual()} \n ";
//empregado 2
$emp2 = new Empregado();
$emp2 ->setPrimeiroNome("Keanu");
$emp2 ->setSobrenome("Reeves");
$emp2->setSalarioMensal(200000);
$emp2->validaSalarioMensal();
$emp2->setSalarioAnual();
echo "O salario anual de {$emp2-> getPrimeiroNome()}  {$emp2->getSobrenome()} é R$ {$emp2->getSalarioAnual()} \n"; 
$emp2 -> aumentaSalarioMensal();
$emp2->setSalarioAnual();
echo "O salario anual de {$emp2-> getPrimeiroNome()} recebeu acrescimo de 10% e agora é de R$ {$emp2->getSalarioAnual()} \n ";
?>
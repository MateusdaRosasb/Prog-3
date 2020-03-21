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
$empregado1 = new Empregado();
$empregado1->validaSalarioMensal();
$empregado1->setSalarioAnual();
echo "O salario anual de {$empregado1-> getPrimeiroNome()} {$empregado1->getSobrenome()} é R$ {$empregado1->getSalarioAnual()}\n"; 
$empregado1 ->aumentaSalarioMensal();
$empregadp1->setSalarioAnual();
echo "O salario anual de {$empregado1-> getPrimeiroNome()} recebeu acréscimo de 10% e agora é de R$ {$empregado1->getSSalarioAnual()} \n ";

//empregado 2
$empregado2 = new Empregado();
$empregado2 ->setPrimeiroNome("Keanu");
$empregado2 ->setSobrenome("Reeves");
$empregado2->setSalarioMensal(200000);
$empregado2->validaSalarioMensal();
$empregado2->setSalarioAnual();
echo "O salario anual de {$empregado2-> getPrimeiroNome()}  {$empregado2->getSobrenome()} é R$ {$empregado2->getSalarioAnual()} \n"; 
$empregado2 -> aumentaSalarioMensal();
$empregado2->setSalarioAnual();
echo "O salario anual de {$empregado2-> getPrimeiroNome()} recebeu acréscimo de 10% e agora é de R$ {$empregado2->getSalarioAnual()} \n ";
?>

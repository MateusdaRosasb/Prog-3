<?php

class Carro{
  public $modelo;
  public $velocidadeMaxima;
  public $velocidadeAtual;

public function Carro($modl,$velomax){
    $this->modelo = $modl;
    $this->velolocidadeMaxima = $velomax;
    echo "{$this->setModelo()} \n";
    $this->ligaCarro();
    $this->acelera();
    $this->reduzir();
    $this->pararCarro();
    $this->desligaCarro();
}
public function ligaCarro(){
      echo"Carro ligado \n";
  }
public function desligaCarro(){
    echo "Carro Desligado \n ";
  }
public function acelera(){
    $this->velocidadeAtual = $this->velocidadeMaxima;
    echo "Acelerando \nVelocidade = {$this->velocidadeAtual} km/h \n";
  }
public function setModelo(){
    return $this->modelo;
  }
public function reduzir(){
    $this->velocidadeatual = $this->velocidadeatual/2;
    echo"Reduzindo velocidade! \nVelocidade = {$this->velocidadeAtual} km/h \n";
  }
public function pararCarro(){
    $this->velocidadeatual = 0;
    echo "Carro parado \nVelocidade = {$this->velocidadeAtual} km/h\n";
  }
}

$car = new Carro("BMW X",80);
?>
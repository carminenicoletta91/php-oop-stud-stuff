<?php
trait FullName{
  public function PrintFullName(){
    return $this -> name." ".$this -> lastname."<br>";
  }
}

class Persona{
  public $name;
  public $lastname;
  public $address;

  use FullName;
  public function __construct($name,$lastname,$address){
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> address = $address;
  }

  public function toString(){
    return $this -> name ." ".$this -> lastname." ".$this -> address;
  }
}

class Studente extends Persona{
  public $ProgStudy;
  public $Tax;

  public function __construct($name,$lastname,$address,$ProgStudy,$Tax){
    parent::__construct($name,$lastname,$address);
    $this -> ProgStudy = $ProgStudy;
    $this -> Tax = $Tax;
  }
  public function toString(){
    return parent::toString()." ".$this -> ProgStudy." ".$this -> Tax;
  }
}

class Professore extends Persona{
  public $specializzazione;
  public $paga;

  public function __construct($name,$lastname,$address,$specializzazione,$paga){
    parent::__construct($name,$lastname,$address);
    $this -> specializzazione = $specializzazione;
    $this -> paga = $paga;
  }

  public function toString(){
    return parent::toString()." ".$this -> specializzazione." ".$this -> paga;
  }
}



echo("PERSONA <br>");
$utente1 = new Persona('Carlo','Marafioti','carlomarafioti@gmail.com');
echo $utente1 -> toString()."<br>";
echo("USO TRAIT FULLNAME <br>");
echo $utente1 -> PrintFullName()."<br> ";

echo("STUDENTE <br>");
$Student1 = new Studente('Carlo','Marafioti','carlomarafioti@gmail.com','Ing.Civile',1450);
echo $Student1 -> toString()."<br>";
echo("USO TRAIT FULLNAME <br>");
echo $Student1 ->PrintFullName()."<br>";

echo("PROFESSORE <br>");
$Professore = new Professore('Luca','Pirillo','lucapirillo@gmail.com','informatica',2240);
echo $Professore -> toString()."<br>";
echo("USO TRAIT FULLNAME <br>");
echo $Professore ->PrintFullName();
?>

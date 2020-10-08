<html>

<?php

Class APP{

    public function __construct($name="APP"){
        echo "Bienvenidos a nuestra app<br>";
    }

    public function run()
  {
    if(isset($_GET['method'])){
      $method=$_GET['method'];

    }else {
      $method='index';
    }
    $this->$method();
  }

    public function index(){
        echo "Estamos en el index<br>";
        
        include('views/home.php');
        

    }

    public function fibonacci(){

    $n1=1;
    $n2=0;

    while ($n1<= 1000000 || $n2 <= 1000000){

    $suma=$n1+$n2;
    $n1=$n2;
    $n2=$suma;
    $lista[]=$suma;
    }
    include('views/fibonacci.php');
    }

    public function potencias2(){

        $n=2;
        $lista=[];
        for ($potencia=0; $potencia <=24 ; $potencia++) { 
            $resultado=pow($n,$potencia);
            $lista[]=$resultado;
        }
        include('views/potencias2.php');
    }

    public function factorial (){

        $n=1000000;
        $factorial=1;
        $lista=[];

        for ($i=1; $i <=$n ; $i++) { 
            $factorial=$factorial*$i;
            $lista[]=$factorial;
        
        }
       include('views/factorial.php');


    }

    public function primos(){

        $n=10000;
        $contador=0;
        for ($i=1; $i <=$n ; $i++) { 
            if($n%$i==0){
            $contador=$contador+1;
            $lista[]=$contador;
            }
            if ($lista==2) {
                echo 'primo';
            }else {
                echo 'no es primo';
            } 
        }
        
        include('views/primos.php');

    }
}

?>


</html>
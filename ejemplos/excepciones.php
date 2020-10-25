<?php
function dividir($dividendo, $divisor) {
  if($divisor == 0) {
    throw new Exception("División por cero");
  }
  return $dividendo / $divisor;
}

//esto funciona
echo dividir(5, 3);
//esto va a fallar porque no sabemos que hacer con la excepción
echo dividir(5, 0);
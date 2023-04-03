<?php

trait Validator
{

  // Funzione che genera un Eccezione se il numro e' negativo
  public function testNegativeNumber($num)
  {
    if ($num < 0) {
      throw new Exception('Inserire un numero positivo!');
    }
  }
}

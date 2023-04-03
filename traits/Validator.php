<?php

trait Validator
{

  // Funzione che genera un Eccezione se il numero e' negativo
  public function testNegativeNumber($num)
  {
    if ($num < 0) {
      throw new Exception('Inserire un numero positivo!');
    }
  }

  // Funzione che controlla la lunghezza di una Stringa
  public function testStringLength($string, $min_len, $max_len)
  {
    if (strlen($string) < $min_len) {
      throw new Exception("Inserire una stringa maggiore di $min_len");
    }

    if (strlen($string) > $max_len) {
      throw new Exception("Inserire una stringa minore di $max_len");
    }
  }

  // Funzione che controlla che il nome della categoria sia valido
  public function testCategoryName($name)
  {
    if ($name !== 'cane' && $name !== 'gatto') {
      throw new Exception("Inserire una categoria valida ('cane' o 'gatto')");
    }
  }
}

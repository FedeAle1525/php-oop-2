<?php

trait Validator
{

  // Se il numero e' negativo ritorna 'false', se e, positivo 'true'
  public function testNegativeNumber($num)
  {
    if ($num < 0) {
      return true;
    } else {
      return false;
    }
  }
}

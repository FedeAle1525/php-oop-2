<?php
require_once __DIR__ . '/./Product.php';

class Food extends Product
{
  protected float $kal;
  protected array $ingredients;

  // COSTRUTTORE
  function __construct($_name, $_price, $_categ, $_ingredients)
  {

    parent::__construct($_name, $_price, $_categ);

    $this->setIngredients($_ingredients);
  }

  // SETTERS

  public function setKal(float $newVal)
  {
    if ($newVal > 0) {
      $this->kal = $newVal;
    } else {
      echo 'Inserire un numero positivo';
    }
  }

  public function setIngredients(string $newVal)
  {
    if ($newVal !== '') {
      array_push($this->ingredients, $newVal);
    }
  }

  // GETTERS

  public function getKal(): string
  {
    return $this->kal;
  }

  public function getIngrediets(): array
  {
    return $this->ingredients;
  }
}

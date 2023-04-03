<?php
require_once __DIR__ . '/./Product.php';
require_once __DIR__ . '/./traits/Validator.php';

class Food extends Product
{
  // Utilizzo il Trait 'Validator'
  use Validator;

  protected float $kal;
  protected array $ingredients = [];

  // COSTRUTTORE
  function __construct($_name, $_price, $_categ, $_ingredient)
  {

    parent::__construct($_name, $_price, $_categ);

    $this->setIngredients($_ingredient);
  }

  // SETTERS

  public function setKal(float $newVal)
  {
    // Richiamo la Funzione che testa il nuovo valore, creata dentro Validator
    if ($this->testNegativeNumber($newVal)) {
      echo "Food: inserire un numero positivo";
    } else {
      $this->kal = $newVal;
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

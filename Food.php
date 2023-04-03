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
  function __construct(string $_name, float $_price, Category $_categ, string $_ingredient)
  {

    parent::__construct($_name, $_price, $_categ);

    $this->setIngredients($_ingredient);
  }

  // SETTERS

  public function setKal(float $newVal)
  {
    // Intercetto l'Eccezione generata dal controllo del Validator per "bypassare" il Fatal Error e stampare un messaggio di errore.
    // try {
    //   // Richiamo la Funzione che testa il nuovo valore, creata dentro Validator
    //   $this->testNegativeNumber($newVal);
    // } catch (Exception $ex) {
    //   echo 'Errore: ' . $ex->getMessage();
    // }

    // Richiamo la Funzione che testa il nuovo valore, creata dentro Validator
    $this->testNegativeNumber($newVal);

    $this->kal = $newVal;
  }

  public function setIngredients(string $newVal)
  {
    if ($newVal !== '') {

      $this->testStringLength($newVal, 5, 30);

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

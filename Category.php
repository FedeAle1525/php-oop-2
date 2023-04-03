<?php
require_once __DIR__ . '/./traits/Validator.php';
class Category
{
  // Utilizzo il Trait 'Validator'
  use Validator;

  protected string $name;
  // Per "breed" si intende la razza o specie di animale
  protected string $breed;
  protected string $size;
  protected float $weight;
  protected static array $icons = ['./images/dog_icon.png', './images/cat_icon.png'];
  protected string $icon;

  // COSTRUTTORE
  function __construct(string $_name, float $_weight)
  {
    $this->setName($_name);
    $this->setWeight($_weight);
  }

  // SETTERS

  public function setName(string $newVal)
  {
    // if ($newVal === 'cane' || $newVal === 'gatto') {
    //   $this->name = $newVal;
    // } else {
    //   throw new Exception("Inserire una categoria valida ('cane' o 'gatto')");
    // }

    $this->testCategoryName($newVal);

    $this->name = $newVal;

    $this->setIcon($newVal);
  }

  public function setBreed(string $newVal)
  {
    $this->testStringLength($newVal, 5, 50);

    $this->breed = $newVal;
  }

  public function setSize(string $newVal)
  {
    switch ($newVal) {

      case 'small':
        $this->size = $newVal;
        break;

      case 'medium':
        $this->size = $newVal;
        break;

      case 'big':
        $this->size = $newVal;
        break;

      default:
        throw new Exception('Inserire una taglia corretta (small, medium, large)');
        break;
    }
  }

  public function setWeight(float $newVal)
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

    $this->weight = $newVal;
  }

  private function setIcon(string $newVal)
  {

    if ($newVal === 'cane') {
      $this->icon = self::$icons[0];
    }

    if ($newVal === 'gatto') {
      $this->icon = self::$icons[1];
    }
  }

  // GETTERS

  public function getName(): string
  {
    return $this->name;
  }

  public function getBreed(): string
  {
    return $this->breed;
  }

  public function getSize(): string
  {
    return $this->size;
  }

  public function getWeight(): float
  {
    return $this->weight;
  }

  public function getIcon(): string
  {
    return $this->icon;
  }
}

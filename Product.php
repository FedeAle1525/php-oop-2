<?php
require_once __DIR__ . '/./Category.php';
require_once __DIR__ . '/./traits/Validator.php';


class Product
{
  // Utilizzo il Trait 'Validator'
  use Validator;

  protected string $name;
  protected string $desc;
  protected float $price;
  protected Category $categ;


  // Costruttore
  function __construct($_name, $_price, $_categ)
  {
    $this->setName($_name);
    $this->setPrice($_price);
    $this->setCateg($_categ);
  }

  // SETTERS

  public function setDesc(string $newVal)
  {
    $this->testStringLength($newVal, 5, 80);

    $this->desc = $newVal;
  }

  public function setName(string $newVal)
  {
    $this->testStringLength($newVal, 5, 50);

    $this->name = $newVal;
  }

  public function setPrice(float $newVal)
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

    $this->price = $newVal;
  }

  public function setCateg(Category $newVal)
  {
    $this->categ = $newVal;
  }

  // GETTERS

  public function getName(): string
  {
    return $this->name;
  }

  public function getDesc(): string
  {
    return $this->desc;
  }

  public function getPrice(): string
  {
    return $this->price;
  }

  public function getCateg(): Category
  {
    return $this->categ;
  }

  // METHODS

  public function calcFinalPrice($discount)
  {
    // Calcolo lo sconto solo se il valore e' compreso tra 0 e 80, altrimento ritorno il prezzo non scontato
    if ($discount < 0 && $discount > 80) {
      throw new Exception('Inserire una percentuale di sconto valida (compresa tra 0 e 80)');
    } else {
      return ($this->price * (100 - $discount) / 100);
    }
  }
}

<?php
require_once __DIR__ . '/./Category.php';


class Product
{
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
    if (strlen($newVal) < 80) {
      $this->desc = $newVal;
    } else {
      echo 'Descrizione troppo lunga';
    }
  }

  public function setName(string $newVal)
  {
    if (strlen($newVal) < 50) {
      $this->name = $newVal;
    } else {
      echo 'Nome troppo lungo';
    }
  }

  public function setPrice(float $newVal)
  {
    if ($newVal > 0) {
      $this->price = $newVal;
    } else {
      echo 'Inserire numero positivo';
    }
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
      return $this->price;
    } else {
      return ($this->price * (100 - $discount) / 100);
    }
  }
}

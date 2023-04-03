<?php

class Category
{
  protected string $name;
  // Per "breed" si intende la razza o specie di animale
  protected string $breed;
  protected string $size;
  protected float $weight;
  protected static array $icons = ['./images/dog_icon.png', './images/cat_icon.png'];
  protected string $icon;

  // COSTRUTTORE
  function __construct($_name, $_weight)
  {
    $this->setName($_name);
    $this->setWeight($_weight);
    $this->setIcon($_name);
  }

  // SETTERS

  public function setName(string $newVal)
  {
    if ($newVal === 'cane' || $newVal === 'gatto') {
      $this->name = $newVal;
    } else {
      echo 'Categoria non valida';
    }
  }

  public function setBreed(string $newVal)
  {
    if (strlen($newVal) < 50) {
      $this->breed = $newVal;
    } else {
      echo 'Nome troppo lungo';
    }
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
        echo 'Inserire un valore corretto (small, medium, large)';
    }
  }

  public function setWeight(float $newVal)
  {
    if ($newVal > 0) {
      $this->weight = $newVal;
    }
  }

  public function setIcon(string $newVal)
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

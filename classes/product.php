<?php
require_once __DIR__ . "/../traits/TipoDiSpedizione.php";
class Product
{
  protected $name;
  protected $price;
  protected $class;
  protected $amount;


  public function __construct(string $name, $price, string $class, $amount)
  {
    $this->name = $name;
    $this->price = $price;
    $this->category = $class;
    $this->amount = $amount;
  }


  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getCategory()
  {
    return $this->class;
  }

  public function getAmount()
  {
    return $this->amount;
  }
}

<?php
class CreditCard
{
  protected $type;
  protected $number;
  protected $expireDate;
  protected $cvc;

  public function __construct(string $type,  $number,  string $expireDate, $cvc)
  {
    $this->type = $type;
    $this->numero = $number;
    $this->expireDate = $expireDate;
    $this->cvc = $cvc;
  }
}

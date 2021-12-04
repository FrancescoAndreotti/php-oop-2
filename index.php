<?php

require_once __DIR__ . "/classes/user.php";
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/card.php";


$prodotto = new Product("Macbook pro", 2400, "pc", 1);
$payment = new CreditCard("American Express", 1234512348764567, "12/26", 2955);
$user = new User("Francesco", "Andreotti", "Francesco@gmail.com", "Boolean45");

<?php

declare(strict_types=1);

namespace Alfa\Entidade;

abstract class Funcionario
{
  public function getBonificacao(): float
  {
    return 1000.00;
  }
}

<?php

declare(strict_types=1);

namespace Alfa\Entidade;

class Presidente extends Funcionario
{
  public function getBonificacao(): float
  {
    return 5_000.00;
  }
}

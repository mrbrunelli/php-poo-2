<?php

declare(strict_types=1);

namespace Alfa\Entidade;

class Gerente extends Funcionario
{
  public function getBonificacao(): float
  {
    return 3_500.00;
  }
}

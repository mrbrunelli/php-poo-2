<?php

declare(strict_types=1);

namespace Alfa\Servico;

use Alfa\Entidade\Funcionario;

class CalculaBonificacao
{
  public function calcula(Funcionario $funcionario)
  {
    return $funcionario->getBonificacao() + 50;
  }
}

<?php

declare(strict_types=1);

namespace Alfa\Entidade;

class Diretor extends Gerente
{
  public function getBonificacao(): float
  {
    return parent::getBonificacao() * 1.20;
  }
}

<?php

declare(strict_types=1);

namespace Alfa\Bebida;

class CafePingado extends Cafe
{

  public function adicionarCondimentos(): void
  {
    echo "Adicionar leite \n";
    parent::adicionarCondimentos();
  }
}

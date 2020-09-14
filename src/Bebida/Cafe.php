<?php

declare(strict_types=1);

namespace Alfa\Bebida;

class Cafe extends BebidaCafeinada
{
  public function adicionarCafe(): void
  {
    echo "Adicionar pó de café \n";
  }

  public function infusao(): void
  {
    echo "Adicionar pó de café \n";
  }

  public function adicionarCondimentos(): void
  {
    echo "Adicionar adoçante \n";
  }

  public function adicionarAcucar(): void
  {
    echo "Adicionar Açucar \n";
  }
}

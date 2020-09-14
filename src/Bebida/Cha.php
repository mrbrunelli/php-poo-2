<?php

declare(strict_types=1);

namespace Alfa\Bebida;

class Cha extends BebidaCafeinada
{
  public function inserirSaquinho()
  {
    echo "Inserir saquinho \n";
  }

  public function infusao(): void
  {
    echo "Adicionar o saquinho de chá \n";
  }

  public function adicionarCondimentos(): void
  {
    echo "Adicionar limão \n";
  }

  public function adicionarLimao()
  {
    echo "Adicionar limão \n";
  }
}

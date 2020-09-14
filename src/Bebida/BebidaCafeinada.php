<?php

declare(strict_types=1);

namespace Alfa\Bebida;

abstract class BebidaCafeinada
{
  final public function prepararReceita(): void
  {
    $this->ferverAgua();
    $this->infusao();
    $this->despejarNaXicara();
    $this->adicionarCondimentos();
  }

  public function ferverAgua(): void
  {
    echo "Ferver água \n";
  }

  abstract public function infusao(): void;

  abstract public function adicionarCondimentos(): void;

  public function despejarNaXicara(): void
  {
    echo "Despejar na xícara \n";
  }
}

<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Alfa\Bebida\Cafe;
use Alfa\Bebida\CafePingado;
use Alfa\Bebida\Cha;

echo "Preparar café \n";
echo "============= \n";
(new Cafe())->prepararReceita();

echo "Preparar chá";
echo "============= \n";
(new Cha())->prepararReceita();

echo "Preparar chá";
echo "============= \n";
(new CafePingado())->prepararReceita();

<?php

namespace App\extrator;

class Xlsx extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        //logica de arquivo

        return $this->getDados();
    }
}

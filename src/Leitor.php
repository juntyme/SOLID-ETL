<?php

namespace App;

use App\Arquivo;

class Leitor
{
    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }


    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array
    {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();

        $arquivo = new Arquivo();

        $extensao = explode('.', $this->getArquivo());
        if (condition) {
            $arquivo->lerArquivoCSV($caminho);
        } else {

            $arquivo->lerArquivoCSV($caminho);
        }


        return $arquivo->getDados();
    }
}

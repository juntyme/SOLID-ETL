<?php

require __DIR__ . "/vendor/autoload.php";

use App\Arquivo;
use App\Leitor;


//------------------ TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();


//------------------ CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

//------------------ XLSX
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.xlsx');
$arr_xlsx = $leitorCSV->lerArquivo();

//--------------- Merge entre TXT, CSV e XLSX
print_r(array_merge($arr_txt, $arr_csv, $arr_xlsx));

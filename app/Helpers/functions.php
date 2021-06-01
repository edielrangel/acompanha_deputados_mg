<?php

function decimalReal($number, $casas){
    $value = str_replace(',', '', $number);
    $novoValor = number_format((float)$value, $casas, ',', '.');
    return $novoValor;
}

/* function dataTime($value, $format = 'd/m/Y H:i:s')
{
    // Utiliza a classe de Carbon para converter ao formato de data ou hora desejado
    return Carbon\Carbon::parse($value)->format($format);
} */

function dataBr($value, $format = 'd/m/Y')
{
    // Utiliza a classe de Carbon para converter ao formato de data ou hora desejado
    return Carbon\Carbon::parse($value)->format($format);
}

function dataUs($value, $format = 'Y-m-d')
{
    // Utiliza a classe de Carbon para converter ao formato de data ou hora desejado
    return Carbon\Carbon::parse($value)->format($format);
}
<?php

require __DIR__.'/vendor/autoload.php';

use Anddroid97\CurrencyConverter\CurrencyConverter;

$currencyConverter = new CurrencyConverter();

$currencyConverter->convertFrom('USD');
$currencyConverter->convertTo('UAH');
$currencyConverter->setExchangeRate(27.85);

echo $currencyConverter->checkExchangeRate().PHP_EOL;
echo $currencyConverter->getConvertResult(2).PHP_EOL;
echo $currencyConverter->getBeautyConvertResult(2).PHP_EOL;



Currency-Converter
==================

A simple  representation  of currency converter

Usage
------------

1. Set a currency that should be converted from (e.g 'USD')
2. Set a currency that should be get after converting (e.g 'UAH')
3. Set an exchange rates (e.g 1 USD(convertFrom('USD')) is 27.85 UAH(convertTo('UAH')).
So exhcange rates is 27.85
4. You can check that your inputed data is valid. Use function ```checkExchangeRate() ``` 
5. Get result of converting by function ```getConvertResult(int $currencyAmount): float ``` , that takes amount of currency 
that should be converted from and return converted result

Example
-------------
```php
use Anddroid97\CurrencyConverter\CurrencyConverter;

$currencyConverter = new CurrencyConverter();

$currencyConverter->convertFrom('USD');
$currencyConverter->convertTo('UAH');
$currencyConverter->setExchangeRate(27.85);

echo $currencyConverter->checkExchangeRate().PHP_EOL;
echo $currencyConverter->getConvertResult(2).PHP_EOL;
echo $currencyConverter->getBeautyConvertResult(2).PHP_EOL;

```
Results:
```
1 USD equals 27.85 UAH
55.7
Given 2 USD = 55.7 UAH
```

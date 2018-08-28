<?php

namespace Anddroid97\CurrencyConverter;

class CurrencyConverter implements CurrencyConverterInterface
{
    private $fromCurrency;
    private $toCurrency;
    private $exchangeRate;

    public function convertFrom(string $currencyName): void
    {
        $this->fromCurrency = $currencyName;
    }

    public function convertTo(string $currencyName): void
    {
        $this->toCurrency = $currencyName;
    }

    public function setExchangeRate(float $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    public function checkExchangeRate(): string
    {
        return "1 $this->fromCurrency equals $this->exchangeRate $this->toCurrency";
    }

    public function getConvertResult(int $currencyAmount): float
    {
       return $this->exchangeRate * $currencyAmount;
    }

    public function getBeautyConvertResult(int $currencyAmount): string
    {
        $result = $this->exchangeRate * $currencyAmount;
        return "Given $currencyAmount $this->fromCurrency = $result $this->toCurrency";
    }
}
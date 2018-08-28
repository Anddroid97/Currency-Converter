<?php

namespace Anddroid97\CurrencyConverter;

class CurrencyConverter implements CurrencyConverterInterface, OutputCurrencyConverterInterface
{
    private $fromCurrency;
    private $toCurrency;
    private $exchangeRate;

    /**
     * {@inheritdoc}
     */
    public function convertFrom(string $currencyName): void
    {
        $this->fromCurrency = $currencyName;
    }

    /**
     * {@inheritdoc}
     */
    public function convertTo(string $currencyName): void
    {
        $this->toCurrency = $currencyName;
    }

    /**
     * {@inheritdoc}
     */
    public function setExchangeRate(float $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * {@inheritdoc}
     */
    public function checkExchangeRate(): string
    {
        return "1 $this->fromCurrency equals $this->exchangeRate $this->toCurrency";
    }

    /**
     * {@inheritdoc}
     */
    public function getConvertResult(int $currencyAmount): float
    {
       return $this->exchangeRate * $currencyAmount;
    }

    /**
     * {@inheritdoc}
     */
    public function getBeautyConvertResult(int $currencyAmount): string
    {
        $result = $this->exchangeRate * $currencyAmount;
        return "Given $currencyAmount $this->fromCurrency = $result $this->toCurrency";
    }

    //Getters for e.g testing

    public function getFromCurrency(): string
    {
        return $this->fromCurrency;
    }

    public function getToCurrency(): string
    {
        return $this->toCurrency;
    }

    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

}
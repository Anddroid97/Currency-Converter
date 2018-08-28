<?php

namespace Anddroid97\CurrencyConverter;

interface CurrencyConverterInterface
{
    public function convertFrom(string $currencyName): void;

    public function convertTo(string $currencyName): void;

    public function setExchangeRate(float $exchangeRate): void;

    public function checkExchangeRate(): string;

    public function getConvertResult(int $currencyAmount): float;

    public function getBeautyConvertResult(int $currencyAmount): string;
}
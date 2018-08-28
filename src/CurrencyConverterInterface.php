<?php

namespace Anddroid97\CurrencyConverter;

interface CurrencyConverterInterface
{
    /**
     * Set currency that should be converted (e.g 'USD').
     * How to name currency is upon you
     *
     * @param string $currencyName
     */
    public function convertFrom(string $currencyName): void;

    /**
     * Set currency that should be get after converting ( e.g 'EUR').
     * How to name currency is upon you
     *
     * @param string $currencyName
     */
    public function convertTo(string $currencyName): void;

    /**
     * Set exchange rate (e.g 1 USD(convertFrom('USD')) is 0.85 EUR(convertTo('EUR')).
     * So $exchange rate = 0.85
     *
     * @param float $exchangeRate
     */
    public function setExchangeRate(float $exchangeRate): void;

    /**
     * Get result of converting.
     *
     * @param int $currencyAmount  Amount of currency that should be converted from
     * @return float
     */
    public function getConvertResult(int $currencyAmount): float;

}
<?php

namespace Anddroid97\CurrencyConverter;

interface OutputCurrencyConverterInterface
{
    /**
     * Get readable result of converting( e.g. Given 2 USD = 55.7 UAH).
     *
     * @param int $currencyAmount
     * @return string
     */
    public function getBeautyConvertResult(int $currencyAmount): string;

    /**
     * Check exchange Rates that you defined (e.g 1 USD equals 27.85 UAH).
     *
     * @return string
     */
    public function checkExchangeRate(): string;
}
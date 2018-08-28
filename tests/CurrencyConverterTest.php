<?php

namespace Anddroid97\CurrencyConverter\Tests;

use Anddroid97\CurrencyConverter\CurrencyConverter;
use PHPUnit\Framework\TestCase;

class CurrencyConverterTest extends TestCase
{
    /**
     * @var CurrencyConverter
     */
    private $currencyConverter;

    protected function setUp()
    {
        $this->currencyConverter = new CurrencyConverter();
    }

    public function testConvertFrom()
    {
        $this->currencyConverter->convertFrom('USA');

        self::assertEquals('USA',$this->currencyConverter->getFromCurrency());
    }

    public function testConvertTo()
    {
        $this->currencyConverter->convertTo('UAH');

        self::assertEquals('UAH',$this->currencyConverter->getToCurrency());
    }

    public function testExchangeRates()
    {
        $this->currencyConverter->setExchangeRate(27.85);

        self::assertEquals(27.85,$this->currencyConverter->getExchangeRate());
    }

    public function testConvertResult()
    {
        $this->currencyConverter->setExchangeRate(27.85);
        self::assertEquals(55.7, $this->currencyConverter->getConvertResult(2));
    }

}
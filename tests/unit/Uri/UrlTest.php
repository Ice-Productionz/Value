<?php

namespace IceProductionzTests\Value\Unit\Text;

use IceProductionz\Value\Exception\InvalidValue;
use IceProductionz\Value\Uri\Uri;
use IceProductionz\Value\Uri\Url as Model;
use IceProductionz\Value\Value;
use PHPUnit\Framework\TestCase;

/**
 * Class UrlTest
 *
 * @package IceProductionzTests\Value\Unit\Text
 */
class UrlTest extends TestCase
{

    public function provideConstructionData(): array
    {
        return [
            ['', InvalidValue::class],
            ['//asdas', InvalidValue::class],
            ['http://example.com', null],
            ['https://example.com', null],
            ['https://example.com/ass/sd/', null],
            ['https://example.com/ass/sd?123', null],
            ['https://example.com/ass/sd?123#23432', null],
            ['https://example.com/ass/sd?asd=3#23432', null],
        ];
    }
    /**
     * Test construction of Uuid
     *
     * @dataProvider provideConstructionData
     *
     * @param mixed $value
     * @param mixed $expectException
     */
    public function testConstruction($value, $expectException)
    {
        if ($expectException !== null) {
            $this->expectException($expectException);
        }

        $sut =  new Model($value);

        $this->assertInstanceOf(Model::class, $sut);
        $this->assertInstanceOf(Uri::class, $sut);
        $this->assertInstanceOf(Value::class, $sut);
    }


    public function testGetRaw()
    {
        $value = 'https://example.com/ass/sd?asd=3#23432';
        $sut = new Model($value);

        $this->assertSame($value, $sut->toRaw());
    }

}
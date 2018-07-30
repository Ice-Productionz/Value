<?php

namespace IceProductionzTests\Value\Unit\Number;

use IceProductionz\Value\Exception\InvalidValue;
use IceProductionz\Value\Number\Number;
use IceProductionz\Value\Number\Integer as Model;
use IceProductionz\Value\Value;
use PHPUnit\Framework\TestCase;

class IntegerTest extends TestCase
{

    public function provideConstructionData(): array
    {
        return [
            [0.0, InvalidValue::class],
            [12.1, InvalidValue::class],
            [1, null],
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
        $this->assertInstanceOf(Number::class, $sut);
        $this->assertInstanceOf(Value::class, $sut);
    }


    public function testGetRaw()
    {
        
    }

}
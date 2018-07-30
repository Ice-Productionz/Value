<?php

namespace IceProductionzTests\Value\Unit\Identifier;

use IceProductionz\Value\Exception\InvalidValue;
use IceProductionz\Value\Identifier\Identifier;
use IceProductionz\Value\Identifier\Uuid as Model;
use IceProductionz\Value\Value;
use PHPUnit\Framework\TestCase;

class UuidTest extends TestCase
{

    public function provideConstructionData(): array
    {
        return [
            ['', InvalidValue::class],
            ['x', InvalidValue::class],
            [1, InvalidValue::class],
            ['e1814cf3-7a9a-440b-95dc-b9915ec639ad', null],
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
        $this->assertInstanceOf(Identifier::class, $sut);
        $this->assertInstanceOf(Value::class, $sut);
    }


    public function testGetRaw()
    {

    }

}
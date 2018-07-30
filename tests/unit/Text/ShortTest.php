<?php

namespace IceProductionzTests\Value\Unit\Text;

use IceProductionz\Value\Text\Text;
use IceProductionz\Value\Text\Short as Model;
use IceProductionz\Value\Value;
use PHPUnit\Framework\TestCase;

class ShortTest extends TestCase
{

    public function provideConstructionData(): array
    {
        return [
            ['', null],
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
        $this->assertInstanceOf(Text::class, $sut);
        $this->assertInstanceOf(Value::class, $sut);
    }


    public function testGetRaw()
    {
        
    }

}
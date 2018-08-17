<?php

namespace IceProductionzTests\Value\Unit\Date;

use DateTimeInterface;
use IceProductionz\Value\Date\Date;
use IceProductionz\Value\Date\Datetime as Model;
use IceProductionz\Value\Value;
use PHPUnit\Framework\TestCase;

class DatetimeTest extends TestCase
{

    public function provideConstructionData(): array
    {
        return [
            [$this->createMock(\DateTime::class), null],
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
        $this->assertInstanceOf(Date::class, $sut);
        $this->assertInstanceOf(Value::class, $sut);
    }

    /**
     * Test getting raw value of object
     */
    public function testToRaw()
    {
        $value = $this->mockDatetime();

        $sut = new Model($value);

        $this->assertSame($value, $sut->toRaw());
    }

    /**
     * Test getting json value of the object
     */
    public function testToJson()
    {
        $value = $this->mockDatetime();

        $expected = [
            'value' => 'ThisIsADate',
            'type'  => 'date.datetime'
        ];

        $sut = new Model($value);

        $this->assertSame($expected, $sut->toJson());
    }

    /**
     * @return DateTimeInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    private function mockDatetime()
    {
        $date = $this->createMock(\DateTime::class);
        $date->method('format')->willReturn('ThisIsADate');
        return $date;
    }
}

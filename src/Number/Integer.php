<?php

namespace IceProductionz\Value\Number;

use IceProductionz\Value\Exception\InvalidValue;

class Integer implements Number
{
    /**
     * @var int
     */
    private $value;

    /**
     * Integer constructor.
     *
     * @param int $value
     */
    public function __construct($value)
    {
        if (!\is_int($value)) {
            throw new InvalidValue('$value is not a integer');
        }
        $this->value = $value;
    }

    /**
     * Get initial value
     *
     * @return mixed
     */
    public function toRaw()
    {
        return $this->value;
    }

    /**
     * Convert value to json
     *
     * @return mixed
     */
    public function toJson(): array
    {
        return [
            'value' => $this->value,
            'type'  => 'number.integer'
        ];
    }
}

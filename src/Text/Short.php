<?php

namespace IceProductionz\Value\Text;

/**
 * Class Short
 *
 * @package IceProductionz\Value\Text
 */
class Short implements Text
{
    /**
     * @var string
     */
    private $value;

    /**
     * Short constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Get initial value
     *
     * @return string
     */
    public function toRaw(): string
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
            'type'  => 'text.short'
        ];
    }
}
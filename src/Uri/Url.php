<?php

namespace IceProductionz\Value\Uri;

class Url implements Uri
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
            'type'  => 'uri.url'
        ];
    }
}

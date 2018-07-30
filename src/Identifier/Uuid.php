<?php

namespace IceProductionz\Value\Identifier;

use IceProductionz\Value\Exception\InvalidValue;

/**
 * Class Uuid
 *
 * @package IceProductionz\Value\Identifier
 */
class Uuid implements Identifier
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * Uuid constructor.
     *
     * @param string $uuid
     */
    public function __construct(string $uuid)
    {
        if (preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/', $uuid) !== 1) {
           throw new InvalidValue('$uuid is not valid');
        }

        $this->uuid = $uuid;
    }

    /**
     * Get initial value
     *
     * @return mixed
     */
    public function toRaw()
    {
        return $this->uuid;
    }

    /**
     * Convert value to json
     *
     * @return array
     */
    public function toJson(): array
    {
        return [
            'value' => $this->uuid,
            'type'  => 'identifier.uuid'
        ];
    }
}

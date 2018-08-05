<?php

namespace IceProductionz\Value\Identifier;

use IceProductionz\Value\Exception\InvalidValue;
use Ramsey\Uuid\Uuid as Ramsey;

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
        if (!Ramsey::isValid($uuid)) {
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

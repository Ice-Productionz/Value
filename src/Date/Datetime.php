<?php

namespace IceProductionz\Value\Date;

class Datetime implements Date
{
    /**
     * @var \DateTimeInterface
     */
    private $dateTime;

    /**
     * Datetime constructor.
     *
     * @param \DateTimeInterface $dateTime
     */
    public function __construct(\DateTimeInterface $dateTime)
    {
        $this->dateTime = $dateTime;
    }
    /**
     * Get initial value
     *
     * @return mixed
     */
    public function toRaw()
    {
        return $this->dateTime;
    }

    /**
     * Convert value to json
     *
     * @return mixed
     */
    public function toJson(): array
    {
        return [
            'value' => $this->dateTime->format(DATE_ATOM),
            'type'  => 'date.datetime',
        ];
    }
}
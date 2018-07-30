<?php

namespace IceProductionz\Value;

interface Value
{
    /**
     * Get initial value
     *
     * @return mixed
     */
    public function toRaw();

    /**
     * Convert value to json
     *
     * @return mixed
     */
    public function toJson(): array;
}
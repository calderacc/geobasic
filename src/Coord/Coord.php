<?php

namespace Caldera\GeoBasic\Coord;

class Coord
{
    /** @var float $latitude */
    private $latitude;

    /** @var float $longitude */
    private $longitude;
    
    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }
}
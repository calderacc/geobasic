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

    public function toArray(): array
    {
        return [
            $this->latitude,
            $this->longitude
        ];
    }

    public function toInversedArray(): array
    {
        return [
            $this->longitude,
            $this->latitude
        ];
    }

    public function toLatLngArray(): array
    {
        return [
            'lat' => $this->latitude,
            'lng' => $this->longitude
        ];
    }

    public function toLatLonArray(): array
    {
        return [
            'lat' => $this->latitude,
            'lon' => $this->longitude
        ];
    }
}
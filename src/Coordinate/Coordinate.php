<?php

namespace Caldera\GeoBasic\Coordinate;

use Caldera\GeoBasic\Coord\Coord;
use Caldera\GeoBasic\Coord\CoordInterface;

class Coordinate extends Coord implements CoordinateInterface
{
    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        parent::__construct($latitude, $longitude);
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

    public function northOf(CoordInterface $coord): bool
    {
        return $this->latitude > $coord->getLatitude();
    }

    public function southOf(CoordInterface $coord): bool
    {
        return $this->latitude < $coord->getLatitude();
    }

    public function westOf(CoordInterface $coord): bool
    {
        return $this->longitude < $coord->getLongitude();
    }

    public function eastOf(CoordInterface $coord): bool
    {
        return $this->longitude > $coord->getLongitude();
    }
}
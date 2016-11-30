<?php

namespace Caldera\GeoBasic\Coord;

class Coord implements CoordInterface
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

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
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

    public function northOf(Coord $coord): bool
    {
        return $this->latitude > $coord->getLatitude();
    }

    public function southOf(Coord $coord): bool
    {
        return $this->latitude < $coord->getLatitude();
    }

    public function westOf(Coord $coord): bool
    {
        return $this->longitude < $coord->getLongitude();
    }

    public function eastOf(Coord $coord): bool
    {
        return $this->longitude > $coord->getLongitude();
    }
}
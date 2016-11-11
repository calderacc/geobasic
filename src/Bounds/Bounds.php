<?php

namespace Caldera\GeoBasic\Bounds;

use Caldera\GeoBasic\Coord\CoordInterface;

class Bounds
{
    /** @var CoordInterface $northWest */
    protected $northWest;

    /** @var CoordInterface $southEast */
    protected $southEast;

    public function __construct(CoordInterface $northWest, CoordInterface $southEast)
    {
        $this->northWest = $northWest;
        $this->southEast = $southEast;
    }

    public function toLatLngArray(): array
    {
        return [$this->northWest->toLatLngArray(), $this->southEast->toLatLngArray()];
    }

    public function toLatLonArray(): array
    {
        return [$this->northWest->toLatLonArray(), $this->southEast->toLatLonArray()];
    }
}
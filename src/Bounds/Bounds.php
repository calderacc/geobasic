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
}
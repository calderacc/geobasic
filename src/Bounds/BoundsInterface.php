<?php

namespace Caldera\GeoBasic\Bounds;

use Caldera\GeoBasic\Coord\CoordInterface;

interface BoundsInterface
{
    public function getNorthWest(): CoordInterface;
    public function getSouthEast(): CoordInterface;

    public function getNorthEast(): CoordInterface;
    public function getSouthWest(): CoordInterface;

    public function toLatLngArray(): array;
    public function toLatLonArray(): array;
}
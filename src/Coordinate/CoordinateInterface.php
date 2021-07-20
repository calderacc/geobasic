<?php declare(strict_types=1);

namespace Caldera\GeoBasic\Coordinate;

use Caldera\GeoBasic\Coord\CoordInterface;

interface CoordinateInterface extends CoordInterface
{
    public function toArray(): array;
    public function toInversedArray(): array;
    public function toLatLngArray(): array;
    public function toLatLonArray(): array;

    public function northOf(CoordInterface $coord): bool;
    public function southOf(CoordInterface $coord): bool;
    public function westOf(CoordInterface $coord): bool;
    public function eastOf(CoordInterface $coord): bool;
}
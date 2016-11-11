<?php

namespace Caldera\GeoBasic\Coord;

interface CoordInterface
{
    public function getLatitude();
    public function getLongitude();

    public function toArray(): array;
    public function toInversedArray(): array;
    public function toLatLngArray(): array;
    public function toLatLonArray(): array;

    public function northOf(Coord $coord): bool;
    public function southOf(Coord $coord): bool;
    public function westOf(Coord $coord): bool;
    public function eastOf(Coord $coord): bool;
}
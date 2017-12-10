<?php

namespace Caldera\GeoBasic\Coord;

interface CoordInterface
{
    public function getLatitude(): ?float;
    public function getLongitude(): ?float;
}
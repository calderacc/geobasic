<?php declare(strict_types=1);

namespace Caldera\GeoBasic\Coord;

interface CoordInterface
{
    public function getLatitude(): ?float;
    public function getLongitude(): ?float;
}

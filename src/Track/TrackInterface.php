<?php declare(strict_types=1);

namespace Caldera\GeoBasic\Track;

interface TrackInterface
{
    public function getPolyline(): string;
    public function setPolyline(string $polyline): TrackInterface;
}

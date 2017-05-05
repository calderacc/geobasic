<?php

namespace Caldera\GeoBasic\Track;

interface TrackInterface
{
    public function getPolyline(): string;
    public function setPolyline(string $polyline): TrackInterface;
}

<?php

namespace Caldera\GeoBasic\TrackInterface;

interface TrackInterface
{
    public function getPolyline(): string;
    public function setPolyline(string $polyline): TrackInterface;
}
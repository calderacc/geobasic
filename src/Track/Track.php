<?php

namespace Caldera\GeoBasic\Track;

class Track implements TrackInterface
{
    protected $polyline;

    public function getPolyline(): string
    {
        return $this->polyline;
    }

    public function setPolyline(string $polyline): TrackInterface
    {
        $this->polyline = $polyline;

        return $this;
    }
}

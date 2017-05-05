<?php

namespace Caldera\GeoBasic\Test\Mocks;

use Caldera\GeoBasic\TrackInterface\TrackInterface;

class SimpleMockedTrack implements TrackInterface
{
    public function setPolyline(string $polyline): TrackInterface
    {
        // TODO: Implement setPolyline() method.
    }

    /**
     * This mocks a 17 waypoint route around the Binnenalster in Hamburg.
     *
     * @return string
     */
    public function getPolyline(): string
    {
        return 'wrzeIuy~{@WdEmBrDmCvAwCuB_D}BaEyBy@yBHoG~@_HrAuItAeG`ByCt@a@`AlAxQv^{@nDwBjB';
    }
}

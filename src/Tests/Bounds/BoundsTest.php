<?php

namespace Caldera\GeoBasic\Tests\Coord;

use Caldera\GeoBasic\Bounds\Bounds;
use Caldera\GeoBasic\Coord\Coord;

class BoundsTest extends \PHPUnit_Framework_TestCase
{
    public function testBounds1()
    {
        $eidelstedt = new Coord(53.6045957, 9.8686486);
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $bounds = new Bounds($eidelstedt, $jungfernstieg);

        $southWest = $bounds->getSouthWest();

        $this->assertEquals(53.5536475, $southWest->getLatitude());
        $this->assertEquals(9.8686486, $southWest->getLongitude());
    }

    public function testBounds2()
    {
        $eidelstedt = new Coord(53.6045957, 9.8686486);
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $bounds = new Bounds($eidelstedt, $jungfernstieg);

        $northEast = $bounds->getNorthEast();

        $this->assertEquals(53.6045957, $northEast->getLatitude());
        $this->assertEquals(9.9897526, $northEast->getLongitude());
    }

    public function testBounds3()
    {
        $eidelstedt = new Coord(53.6045957, 9.8686486);
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $bounds = new Bounds($eidelstedt, $jungfernstieg);

        $expected = [['lat' => 53.6045957, 'lng' => 9.8686486], ['lat' => 53.5536475, 'lng' => 9.9897526]];
        $actual = $bounds->toLatLngArray();

        $this->assertEquals($expected, $actual);
    }

    public function testBounds4()
    {
        $eidelstedt = new Coord(53.6045957, 9.8686486);
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $bounds = new Bounds($eidelstedt, $jungfernstieg);

        $expected = [['lat' => 53.6045957, 'lon' => 9.8686486], ['lat' => 53.5536475, 'lon' => 9.9897526]];
        $actual = $bounds->toLatLonArray();

        $this->assertEquals($expected, $actual);
    }
}
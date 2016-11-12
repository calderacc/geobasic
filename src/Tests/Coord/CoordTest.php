<?php

namespace Caldera\GeoBasic\Tests\Coord;

use Caldera\GeoBasic\Coord\Coord;

class CoordTest extends \PHPUnit_Framework_TestCase
{
    public function testCoord1()
    {
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $this->assertEquals(53.5536475, $jungfernstieg->getLatitude());
        $this->assertEquals(9.9897526, $jungfernstieg->getLongitude());
    }

    public function testCoord2()
    {
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $expected = [
            53.5536475,
            9.9897526
        ];

        $actual = $jungfernstieg->toArray();

        $this->assertEquals($expected, $actual);
    }

    public function testCoord3()
    {
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $expected = [
            9.9897526,
            53.5536475
        ];

        $actual = $jungfernstieg->toInversedArray();

        $this->assertEquals($expected, $actual);
    }

    public function testCoord4()
    {
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $expected = [
            'lat' => 53.5536475,
            'lng' => 9.9897526
        ];

        $actual = $jungfernstieg->toLatLngArray();

        $this->assertEquals($expected, $actual);
    }

    public function testCoord5()
    {
        $jungfernstieg = new Coord(53.5536475, 9.9897526);

        $expected = [
            'lat' => 53.5536475,
            'lon' => 9.9897526
        ];

        $actual = $jungfernstieg->toLatLonArray();

        $this->assertEquals($expected, $actual);
    }
}
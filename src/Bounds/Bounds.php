<?php declare(strict_types=1);

namespace Caldera\GeoBasic\Bounds;

use Caldera\GeoBasic\Coord\Coord;
use Caldera\GeoBasic\Coord\CoordInterface;

class Bounds implements BoundsInterface
{
    /** @var CoordInterface $northWest */
    protected $northWest;

    /** @var CoordInterface $southEast */
    protected $southEast;

    public function __construct(CoordInterface $northWest, CoordInterface $southEast)
    {
        $this->northWest = $northWest;
        $this->southEast = $southEast;
    }

    public function getNorthWest(): CoordInterface
    {
        return $this->northWest;
    }

    public function getSouthEast(): CoordInterface
    {
        return $this->southEast;
    }

    public function getNorthEast(): CoordInterface
    {
        $northEast = new Coord($this->northWest->getLatitude(), $this->southEast->getLongitude());

        return $northEast;
    }

    public function getSouthWest(): CoordInterface
    {
        $southWest = new Coord($this->southEast->getLatitude(), $this->northWest->getLongitude());

        return $southWest;
    }

    public function toLatLngArray(): array
    {
        return [$this->northWest->toLatLngArray(), $this->southEast->toLatLngArray()];
    }

    public function toLatLonArray(): array
    {
        return [$this->northWest->toLatLonArray(), $this->southEast->toLatLonArray()];
    }
}
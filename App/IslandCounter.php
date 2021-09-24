<?php

namespace App;

class IslandCounter
{
    private $processedPoints = [];
    private $islands = [];

    public function count($map)
    {
        for ($row=0; $row < count($map); $row++) { 
            for ($col=0; $col < count($map[$row]); $col++) { 
                if (in_array([$row, $col], $this->processedPoints)) {
                    continue;
                }

                $land = $map[$row][$col] === 1;
                $this->processedPoints[] = [$row, $col];

                if ($land) {
                    $islands = [];
                    $islands[] = [$row, $col];
                    $islands = array_merge($islands, $this->collectNeighbours([$row, $col], $map));
                    
                    $this->islands[] = $islands;
                }
            }
        }

        return count($this->islands);
    }

    private function collectNeighbours($start, $map)
    {
        $neighbours = [];

        $adjacentPoints = [
            [$start[0] - 1, $start[1]],
            [$start[0] + 1, $start[1]],
            [$start[0], $start[1] - 1],
            [$start[0], $start[1] + 1]
        ];

        foreach ($adjacentPoints as $adjacentPoint) {
            
            if (in_array($adjacentPoint, $this->processedPoints)) {
                continue;
            }
    
            if (
                $adjacentPoint[0] >= 0 &&
                $adjacentPoint[1] >= 0 &&
                $adjacentPoint[0] < count($map) &&
                $adjacentPoint[1] < count($map) &&
                $map[$adjacentPoint[0]][$adjacentPoint[1]] === 1
            ) {
                $this->processedPoints[] = $adjacentPoint;
                $neighbours[] = $adjacentPoint;
                $neighbours = array_merge($neighbours, $this->collectNeighbours($adjacentPoint, $map));
            }
        }

        return $neighbours;
    }
}
<?php

namespace App;

class IslandGenerator
{
    public function generateMap($width, $height)
    {
        $map = [];
        for ($i=0; $i < $height; $i++) { 
            $row = [];
            for ($z=0; $z < $width; $z++) { 
                $row[] = rand(0, 1);
            }
            $map[] = $row;
        }
        
        return $map;
    }
}
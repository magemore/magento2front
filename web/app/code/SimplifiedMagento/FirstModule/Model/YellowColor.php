<?php


namespace SimplifiedMagento\FirstModule\Model;


use SimplifiedMagento\FirstModule\Api\Color;

class YellowColor implements Color
{

    public function getColor()
    {
        return "Yellow";
    }
}

<?php


namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Pencil implements PencilInterface
{

    protected $color;
    protected $size;
    protected $name;

    public function __construct(Color $color, Size $size, $name = null)
    {
//        echo get_class($color);
        $this->color = $color;
        $this->size = $size;
        $this->name = $name;
    }

    public function getPencilType()
    {
//        return '';
//        return get_class($this->color);
        return "pencil has ".$this->color->getColor()." Color and ".$this->size->getSize()." Size";
    }
}

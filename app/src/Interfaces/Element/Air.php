<?php


namespace App\src\Interfaces\Element;


abstract class Air implements Element
{
    /**
     * @return string
     */
    public function getElementName(): string
    {
        return ElementEnum::getElementById(ElementEnum::ID_AIR);
    }

    /**
     * @return int
     */
    public function getElementId(): int
    {
        return ElementEnum::getElementIdByName(ElementEnum::NAME_AIR);
    }
}
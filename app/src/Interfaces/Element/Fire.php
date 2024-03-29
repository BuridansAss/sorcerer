<?php


namespace App\src\Interfaces\Element;


abstract class Fire implements Element
{
    /**
     * @return string
     */
    public function getElementName(): string
    {
        return ElementEnum::getElementById(ElementEnum::ID_FIRE);
    }

    /**
     * @return int
     */
    public function getElementId(): int
    {
        return ElementEnum::getElementIdByName(ElementEnum::NAME_FIRE);
    }
}
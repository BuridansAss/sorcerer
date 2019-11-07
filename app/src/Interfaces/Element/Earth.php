<?php


namespace App\src\Interfaces\Element;


abstract class Earth implements Element
{
    /**
     * @return string
     */
    public function getElementName(): string
    {
        return ElementEnum::getElementById(ElementEnum::ID_EARTH);
    }

    /**
     * @return int
     */
    public function getElementId(): int
    {
        return ElementEnum::getElementIdByName(ElementEnum::NAME_EARTH);
    }
}
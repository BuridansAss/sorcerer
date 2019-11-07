<?php


namespace App\src\Interfaces\Element;


abstract class Water implements Element
{
    /**
     * @return string
     */
    public function getElementName(): string
    {
        return ElementEnum::getElementById(ElementEnum::ID_WATER);
    }

    /**
     * @return int
     */
    public function getElementId(): int
    {
        return ElementEnum::getElementIdByName(ElementEnum::NAME_WATER);
    }
}
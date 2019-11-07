<?php


namespace App\src\Interfaces\Element;


interface Element
{
    /**
     * @return string
     */
    public function getElementName() : string;

    /**
     * @return int
     */
    public function getElementId() : int;
}
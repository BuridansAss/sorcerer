<?php


namespace App\src\Interfaces;


interface Storable
{
    /**
     * то что можно хранить инвентарь, на руках
     */
    public function store() : void;
}
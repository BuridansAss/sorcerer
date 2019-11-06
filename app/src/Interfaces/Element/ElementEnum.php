<?php


namespace App\src\Interfaces\Element;


class ElementEnum
{
    public const NAME_FIRE  = 'fire';
    public const NAME_WATER = 'water';
    public const NAME_AIR   = 'air';
    public const NAME_EARTH = 'earth';
    public const NAME_NONE  = 'none';

    public const ID_NONE  = 0;
    public const ID_FIRE  = 1;
    public const ID_WATER = 2;
    public const ID_AIR   = 3;
    public const ID_EARTH = 4;


    private static $elementMap = [
        self::ID_NONE  => self::NAME_NONE,
        self::ID_FIRE  => self::NAME_FIRE,
        self::ID_WATER => self::NAME_WATER,
        self::ID_AIR   => self::NAME_AIR,
        self::ID_EARTH => self::NAME_EARTH,
    ];
}
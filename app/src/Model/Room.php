<?php


namespace App\src\Model;


class Room
{
    private $id;



    private function __construct()
    {

    }

    public static function getRoomById($id)
    {
        $room = \App\Repository\Room::find($id);
    }
}
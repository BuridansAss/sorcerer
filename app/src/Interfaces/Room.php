<?php


namespace Sorcerer\Interfaces;


use App\src\Interfaces\User;

interface Room
{
    /**
     * @param User $user
     * @return mixed
     */
    public function letIn(User $user) : void;

    /**
     * @param User $user
     * @return mixed
     */
    public function letOut(User $user) : void;
}
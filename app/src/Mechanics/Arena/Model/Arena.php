<?php


namespace App\src\Mechanics\Arena\Model;


use App\src\Interfaces\User;
use Sorcerer\Interfaces\Room;

class Arena implements Room
{

    /**
     * @param User $user
     * @return mixed
     */
    public function letIn(User $user): void
    {
        // TODO: Implement letIn() method.
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function letOut(User $user): void
    {
        // TODO: Implement letOut() method.
    }
}
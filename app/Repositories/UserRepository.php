<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    use BaseRepository;

    protected $mode;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Save the user avatar path.
     *
     * @param  int $id
     * @param  string $photo
     * @return boolean
     */
    public function saveAvatar($id, $photo)
    {
        $user = $this->getById($id);

        $user->avatar = $photo;

        return $user->save();
    }

}
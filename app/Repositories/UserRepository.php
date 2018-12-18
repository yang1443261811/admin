<?php

namespace App\Repositories;

use App\User;
use App\Scopes\StatusScope;

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

    /**
     * 根据ID获取数据
     *
     * @param int $id
     * @return mixed
     */
    public function getById($id)
    {
        $this->model = $this->checkAuthScope();

        return $this->model->findOrFail($id);
    }

    /**
     * Get the user by name.
     *
     * @param  string $name
     * @return mixed
     */
    public function getByName($name)
    {
        return $this->model
                    ->where('name', $name)
                    ->first();
    }

    /**
     * Get number of the records
     *
     * @param  Request $request
     * @param  int $number
     * @param  string $sort
     * @param  string $sortColumn
     * @return mixed
     */
    public function pageWithRequest($request, $number = 3, $sort = 'desc', $sortColumn = 'created_at')
    {
        $this->model = $this->checkAuthScope();

        $keyword = $request->get('keyword');

        return $this->model->when($keyword, function ($query) use ($keyword) {
            $query->where('name', 'like', "%{$keyword}%");
        })
            ->orderBy($sortColumn, $sort)
            ->paginate($number);
    }

    /**
     * Update the article record without draft scope.
     *
     * @param  int $id
     * @param  array $input
     * @return mixed
     */
    public function update($id, $input)
    {
        $this->model = $this->model->withoutGlobalScope(StatusScope::class)->findOrFail($id);

        return $this->save($this->model, $input);
    }

    /**
     * Check the auth and the model without global scope when user is the admin.
     *
     * @return Model
     */
    public function checkAuthScope()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            $this->model = $this->model->withoutGlobalScope(StatusScope::class);
        }

        return $this->model;
    }

}
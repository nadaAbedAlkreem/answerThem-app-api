<?php

namespace App\Repositories\Eloquent;

use App\Models\User; // Import the User model
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\IUserRepositories;

// Import the interface for the User repository

class UserRepository extends BaseRepository implements IUserRepositories
{
    public function __construct(User $user)
    {
        $this->model = $user; // Set the model in the base class
    }

    // You can add more user-specific methods here
    public function findByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }

    // Example of a custom method to get users with roles
    public function getUsersWithRoles($orderBy = ['column' => 'id', 'dir' => 'DESC'])
    {
        return $this->model->with('roles')->orderBy($orderBy['column'], $orderBy['dir'])->get();
    }
}

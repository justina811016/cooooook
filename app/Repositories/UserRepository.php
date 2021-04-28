<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getUsers()
    {
    	return User::select('name', 'email')->get();
    }
}

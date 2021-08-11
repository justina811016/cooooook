<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    public function getUsers()
    {
    	return User::select('name', 'email')->paginate(5);
    }

    public function createUser(array $data)
    {
    	$user = new User();
    	$user->name = $data['name'];
    	$user->email = $data['email'];
    	$user->password = Hash::make($data['add_password']);
    	$user->save();

    	return $user;
    }
}

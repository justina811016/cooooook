<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
	protected $user_service;

	public function __construct(UserService $user_service)
	{
		$this->user_service = $user_service;
	}

	/**
	 * 取得使用者列表
	 */
    function index()
    {
    	$users = $this->user_service->handleUserListLogic();

    	return view('user.index', compact('users'));
    }

    public function store(CreateUserRequest $request)
    {
    	dd($request->all());
    }
}

<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected $user_repository;

    public function __construct(UserRepository $user_repository)
    {
        $this->user_repository = $user_repository;
    }

    /**
     * 處理取得使用者列表邏輯
     */
    public function handleUserListLogic()
    {
        return $this->user_repository->getUsers();
    }
}
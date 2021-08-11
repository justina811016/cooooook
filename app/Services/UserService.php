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

    /**
     * 處理新增使用者邏輯
     */
    public function handleCreateUserLogic(array $data)
    {
        // 驗證密碼 是否與 確認密碼相同
        if ($data['add_password'] !== $data['conform_password']) {
            return [
                'code' => '111',
                'detail' => __('message.password different')
            ];
        }

        $new_user = $this->user_repository->createUser($data);

        return [
            'code' => '0000',
            'detail' => __('message.create successfully')
        ];
    }
}
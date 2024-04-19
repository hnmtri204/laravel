<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post; // Model liên quan
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Post $post)
    {
        // Cho phép tất cả người dùng xem bài đăng
        return true;

        // Hoặc chỉ cho phép chủ sở hữu bài đăng xem
        return $user->id === $post->user_id;
    }

    public function update(User $user, Post $post)
    {
        // Chỉ cho phép chủ sở hữu bài đăng cập nhật
        return $user->id === $post->user_id||$post->is_admin;
    }

    public function delete(User $user, Post $post)
    {
        // Chỉ cho phép quản trị viên xóa bài đăng
        return $user->is_admin;
    }
}

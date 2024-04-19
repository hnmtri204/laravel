<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Định nghĩa các thuộc tính của bài viết (ví dụ: title, content, user_id)
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    // Quan hệ với model khác (ví dụ: user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

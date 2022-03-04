<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';

    protected $fillable = [
        'status', 'date', 'comment',
    ];


    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}

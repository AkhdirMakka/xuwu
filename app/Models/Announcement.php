<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillabe = [
        'title', 'content', 'priorty'
    ];
}

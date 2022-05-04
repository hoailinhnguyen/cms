<?php

namespace App\Models;

use App\Support\Traits\HasModify;
use App\Supports\Traits\HasUuid;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasUuid, HasTimestamps, HasModify;

    protected $fillable = [
        'post_name',
        'full_name',
        'email',
        'bank_id',
        'post_group_id',
        'limit',
        'account_number',
        'phone',
        'active_master',
        'active_visa',
        'active_jcb',
        'active_napas',
        'master',
        'visa',
        'jcb',
        'napas',
        'description',
    ];
}

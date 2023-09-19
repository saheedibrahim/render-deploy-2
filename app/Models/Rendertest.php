<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendertest extends Model
{
    use HasFactory;
    protected $fillable = [
        'slack_name',
        'current_day',
        'utc_time',
        'track',
        'github_file_url',
        'github_repo_url',
        'status_code'
    ];
}

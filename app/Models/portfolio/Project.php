<?php

namespace App\Models\portfolio;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'name',
        'description',
        'picture',
        'status',
        'role',
        'link',
        'github',
        //'tags' // Assuming 'tags' is a JSON field in the database
    ];
}

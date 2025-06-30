<?php

namespace App\Models\Melody;

use Illuminate\Database\Eloquent\Model;

class SheetMusic extends Model
{
    protected $table = 'sheet_music';

    protected $hidden = ['created_at', 'updated_at'];

    protected $fillable = [
        'title',
        'composer',
        'arranger',
        'instrument',
        'difficulty',
        'description',
        'file_path',
    ];
}

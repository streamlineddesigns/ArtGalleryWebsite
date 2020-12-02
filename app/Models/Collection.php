<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collections';
    public $timestamps = true;

    protected $casts = [
        'name_color_id' => 'integer'
    ];

    protected $fillable = [
        'name',
        'description',
        'background_image_url',
        'name_color_id',
    ];
}

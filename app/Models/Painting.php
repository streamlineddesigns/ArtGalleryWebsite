<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;

    protected $table = 'paintings';
    public $timestamps = true;

    protected $casts = [
        'price' => 'integer',
        'name_color_id' => 'integer',
        'button_color_id' => 'integer',
    ];

    protected $fillable = [
        'name',
        'description',
        'footer_text',
        'price',
        'image_url',
        'name_color_id',
        'button_color_id'
    ];
}

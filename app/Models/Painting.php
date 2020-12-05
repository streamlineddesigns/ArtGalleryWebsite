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
    ];

    protected $fillable = [
        'name',
        'description',
        'footer_text',
        'price',
        'image_url',
        'name_color',
        'button_color'
    ];
}

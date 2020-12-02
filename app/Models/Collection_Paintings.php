<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection_Paintings extends Model
{
    use HasFactory;

    protected $table = 'collection_paintings';
    public $timestamps = true;

    protected $casts = [
        'collection_id' => 'integer',
        'painting_id' => 'integer'
    ];

    protected $fillable = [
        'collection_id',
        'painting_id'
    ];
}

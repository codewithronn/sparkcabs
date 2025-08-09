<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDriver extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'document_ktp',
        'document_sim',
        'status',
        'rating',
        'total_trips'
    ];
}

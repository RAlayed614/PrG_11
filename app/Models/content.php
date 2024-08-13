<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class content extends Model
{
    protected $fillable = ['Title', 'description', 'Photo', 'type'];
    use HasFactory;

}

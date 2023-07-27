<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $fillable = ['name', 'email','date_of_birth','status'];

    
}

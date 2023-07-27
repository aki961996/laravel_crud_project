<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'searchs';
    protected $fillable = ['code', 'date_of_birth'];
}

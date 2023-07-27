<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsersModel extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'user_id';

    protected $table = 'users_models';
    
    //code ellodam eth avalible ann
    protected $hidden = ['user_id'];

    protected $fillable = ['name', 'email', 'password', 'date_of_birth', 'status', 'remember_token'];

    public function getDateOfBirthFormattedAttribute()
    {  //date of birth formatted
        return date('d-M-Y', strtotime($this->date_of_birth));
    }

    //this function make namal form 30/04/1996 typed eth db kera ymd formet ann athin vendi epozhum eni egine kettam

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = date('Y-m-d', strtotime($value));
    }

    public function getStatusTextAttribute()
    {
        if ($this->status == 1) return 'active';
        else return 'inactive';
    }
    public function scopeActive($query)
    {
        return  $query->where('status', 1);
    }

    protected $appends = ['date_of_birth_formatted', 'status_text'];
}

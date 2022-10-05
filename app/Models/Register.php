<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'dob',
        'phone_number',
        'describe_yourself',
        'gender',
        'user_id',
        'parent_guardian_contact',
        'pastor_name_contact',
        'residency',
        'family_info'
    ];
    public function user(){
        return $this->belongsTo(User::class); 
    }
}

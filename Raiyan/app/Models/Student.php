<?php

namespace App\Models;

use App\Traits\TraitUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    use TraitUuid;
    protected $fillable = ['name', 'description', 'gender', 'hobby', 'country', 'state'];

}

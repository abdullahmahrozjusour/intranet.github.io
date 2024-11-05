<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsefulContact extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'useful_contacts';
    protected $guarded = [];
}

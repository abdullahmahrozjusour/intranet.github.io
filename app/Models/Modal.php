<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'modals';
    protected $guarded = [];
}
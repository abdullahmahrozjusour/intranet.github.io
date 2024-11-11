<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'organizations';
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Organization::class,'parentId','id');
    }
}

<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Organization extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;
    protected $table = 'organizations';
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Organization::class,'parentId','id');
    }

    public function children()
    {
        return $this->hasMany(Organization::class,'parentId','id')
        ->where('status',Status::STATUS_ACTIVE)->orderBy('id','ASC');
    }
}

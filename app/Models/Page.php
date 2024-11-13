<?php

namespace App\Models;

use App\Constants\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'pages';
    protected $guarded = [];

    public function data()
    {
        return $this->hasMany(PageData::class,'pageId','id')
        ->where('status',Status::STATUS_ACTIVE);
    }
}
<?php


namespace App\Repositories\News;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface NewsInterface extends CoreInterface {
    public function getAllNewNews($column,$value,$column2,$value2);
}

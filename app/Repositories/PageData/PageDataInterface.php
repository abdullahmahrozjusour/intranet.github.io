<?php


namespace App\Repositories\PageData;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface PageDataInterface extends CoreInterface {
    public function paginateWithOrderWhere($order_name,$order_value,$entries,$column,$value);
}

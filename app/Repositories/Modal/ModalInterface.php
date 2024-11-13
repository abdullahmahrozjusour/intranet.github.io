<?php


namespace App\Repositories\Modal;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface ModalInterface extends CoreInterface {
    public function getModalPage($column,$value);
    public function paginateWithOrderNotCEO($order_name,$order_value,$entries);
}

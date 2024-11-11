<?php


namespace App\Repositories\Organization;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface OrganizationInterface extends CoreInterface {
    public function getAllDataWithRelation($relation = [], $orderName, $orderValue, $paginate);
}

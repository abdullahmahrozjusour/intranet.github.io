<?php


namespace App\Repositories\PageData;

use App\Models\PageData;
use App\Repositories\Core\CoreRepository;


class PageDataRepository extends CoreRepository implements PageDataInterface
{
    public function __construct(PageData $model)
    {
        parent::__construct($model);
    }

    public function paginateWithOrderWhere($order_name,$order_value,$entries,$column,$value)
    {
        return $this->model()->orderBy($order_name,$order_value)
        ->where($column,$value)
        ->paginate($entries);
    }
}


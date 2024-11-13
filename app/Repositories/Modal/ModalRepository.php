<?php


namespace App\Repositories\Modal;

use App\Constants\Type;
use App\Models\Modal;
use App\Repositories\Core\CoreRepository;


class ModalRepository extends CoreRepository implements ModalInterface
{
    public function __construct(Modal $model)
    {
        parent::__construct($model);
    }

    public function getModalPage($column,$value)
    {
        return $this->model()->where($column,$value)->first();
    }

    public function paginateWithOrderNotCEO($order_name,$order_value,$entries)
    {
        return $this->model()
        ->where('type','<>',Type::TYPE_CEO_MESSAGE)
        ->orderBy($order_name,$order_value)->paginate($entries);
    }
}


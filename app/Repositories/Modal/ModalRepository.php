<?php


namespace App\Repositories\Modal;

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
}


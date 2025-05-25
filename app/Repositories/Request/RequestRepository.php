<?php


namespace App\Repositories\Request;

use App\Repositories\Core\CoreRepository;
use App\Models\Request;


class RequestRepository extends CoreRepository implements RequestInterface
{
    public function __construct(Request $model)
    {
        parent::__construct($model);
    }

    public function getLastRequest()
    {
        return $this->model
            ->orderBy('created_by', 'DESC')
            ->first();
    }
}

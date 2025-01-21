<?php


namespace App\Repositories\Organization;
use App\Repositories\Core\CoreRepository;
use App\Models\Organization;
use Illuminate\Support\Facades\DB;

class OrganizationRepository extends CoreRepository implements OrganizationInterface
{
    public function __construct(Organization $model)
    {
        parent::__construct($model);
    }

    public function getAllDataWithRelation($relation = [], $orderName, $orderValue, $paginate)
    {
        return $this->model->with($relation)
        ->orderBy($orderName,$orderValue)
        ->paginate($paginate);
    }

    public function getSingleDataWithMultiRelation($relation = [], $orderName, $orderValue)
    {
        return $this->model->with($relation)
        ->where('parentId',NULL)
        ->orderBy($orderName,$orderValue)
        ->first();
    }
}


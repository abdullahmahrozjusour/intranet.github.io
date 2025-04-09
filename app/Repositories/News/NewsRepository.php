<?php


namespace App\Repositories\News;
use App\Repositories\Core\CoreRepository;
use App\Models\News;


class NewsRepository extends CoreRepository implements NewsInterface
{
    public function __construct(News $model)
    {
        parent::__construct($model);
    }

    public function getAllNewNews($column,$value,$column2,$value2)
    {
        return $this->model->where($column,$value)
        ->whereDate($column2,'>=',$value2)
        ->orderBy($column2,'ASC')->get()->toArray();
    }
}


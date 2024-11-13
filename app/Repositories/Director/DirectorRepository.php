<?php


namespace App\Repositories\Director;

use App\Constants\Type;
use App\Models\Page;
use App\Repositories\Core\CoreRepository;


class DirectorRepository extends CoreRepository implements DirectorInterface
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function getOurDirectorDataWithCount($relation,$value)
    {
        return $this->model()
        ->with($relation)
        ->withCount($value)
        ->where('type',Type::TYPE_DIRECTOR)->first();
    }
}


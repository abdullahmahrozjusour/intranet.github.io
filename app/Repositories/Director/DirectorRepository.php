<?php


namespace App\Repositories\Director;

use App\Models\Page;
use App\Repositories\Core\CoreRepository;


class DirectorRepository extends CoreRepository implements DirectorInterface
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}


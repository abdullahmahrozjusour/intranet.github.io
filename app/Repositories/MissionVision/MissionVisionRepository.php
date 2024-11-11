<?php


namespace App\Repositories\MissionVision;

use App\Models\Page;
use App\Repositories\Core\CoreRepository;


class MissionVisionRepository extends CoreRepository implements MissionVisionInterface
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}


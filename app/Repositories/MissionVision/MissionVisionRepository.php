<?php


namespace App\Repositories\MissionVision;

use App\Constants\Type;
use App\Models\Page;
use App\Repositories\Core\CoreRepository;


class MissionVisionRepository extends CoreRepository implements MissionVisionInterface
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function getOurMissionVisionData($relation)
    {
        return $this->model()
        ->with($relation)
        ->where('type',Type::TYPE_MISSION_VISION)->first();
    }
}


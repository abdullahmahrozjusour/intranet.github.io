<?php


namespace App\Repositories\MissionVision;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface MissionVisionInterface extends CoreInterface {
    public function getOurMissionVisionData($relation);
}

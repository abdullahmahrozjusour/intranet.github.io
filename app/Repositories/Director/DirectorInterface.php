<?php


namespace App\Repositories\Director;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface DirectorInterface extends CoreInterface {
    public function getOurDirectorDataWithCount($relation,$value);
}

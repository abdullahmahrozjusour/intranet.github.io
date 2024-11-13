<?php


namespace App\Repositories\DownloadCenter;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface DownloadCenterInterface extends CoreInterface {
    public function whereWithPaginateAndOrderByCreatedDESC($array = [],$paginate = 18);
}

<?php


namespace App\Repositories\DownloadCenter;
use App\Repositories\Core\CoreRepository;
use App\Models\DownloadCenter;


class DownloadCenterRepository extends CoreRepository implements DownloadCenterInterface
{
    public function __construct(DownloadCenter $model)
    {
        parent::__construct($model);
    }
}


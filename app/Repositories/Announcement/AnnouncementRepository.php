<?php


namespace App\Repositories\Announcement;
use App\Repositories\Core\CoreRepository;
use App\Models\Announcement;


class AnnouncementRepository extends CoreRepository implements AnnouncementInterface
{
    public function __construct(Announcement $model)
    {
        parent::__construct($model);
    }
}


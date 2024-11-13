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

    public function getUpComingAnnouncements($column1,$value1,$column2,$value2,$type)
    {
        return $this->model()
        ->whereDate($column1, '>=', $value1)
        ->where($column2,$value2)
        ->orderBy($type,'ASC')
        ->orderBy($column1,'ASC')
        ->get()->toArray();
    }
}


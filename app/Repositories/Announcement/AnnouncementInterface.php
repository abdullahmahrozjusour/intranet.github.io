<?php


namespace App\Repositories\Announcement;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface AnnouncementInterface extends CoreInterface {
    public function getUpComingAnnouncements($column1,$value1,$column2,$value2,$type);
}

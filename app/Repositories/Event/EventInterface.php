<?php


namespace App\Repositories\Event;

use Illuminate\Http\Request;
use App\Repositories\Core\CoreInterface;


interface EventInterface extends CoreInterface {
    public function getUpComingEvents($column1,$value1,$column2,$value2,$column3,$value3);
}

<?php


namespace App\Repositories\Event;
use App\Repositories\Core\CoreRepository;
use App\Models\Event;


class EventRepository extends CoreRepository implements EventInterface
{
    public function __construct(Event $model)
    {
        parent::__construct($model);
    }

    public function getUpComingEvents($column1,$value1,$column2,$value2,$column3,$value3)
    {
        return $this->model()
        ->whereDate($column1, '>=', $value1)
        // ->where(function ($query) use ($column1, $column2, $value1, $value2) {
        //     $query->whereDate($column1, '>', $value1)
        //         ->orWhere(function ($query) use ($column1, $column2, $value1, $value2) {
        //             $query->whereDate($column1, '=', $value1)
        //                     ->where($column2, '>', $value2);
        //     });
        // })
        ->where($column3,$value3)
        ->orderBy($column1,'ASC')
        // ->orderBy($column2,'ASC')
        ->get()->toArray();
    }
}


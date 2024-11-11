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
}


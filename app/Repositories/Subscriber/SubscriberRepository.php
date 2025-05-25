<?php


namespace App\Repositories\Subscriber;
use App\Repositories\Core\CoreRepository;
use App\Models\Subscriber;


class SubscriberRepository extends CoreRepository implements SubscriberInterface
{
    public function __construct(Subscriber $model)
    {
        parent::__construct($model);
    }
}


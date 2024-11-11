<?php


namespace App\Repositories\UsefulContact;
use App\Repositories\Core\CoreRepository;
use App\Models\UsefulContact;


class UsefulContactRepository extends CoreRepository implements UsefulContactInterface
{
    public function __construct(UsefulContact $model)
    {
        parent::__construct($model);
    }
}


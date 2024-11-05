<?php


namespace App\Repositories\Link;
use App\Repositories\Core\CoreRepository;
use App\Models\Link;


class LinkRepository extends CoreRepository implements LinkInterface
{
    public function __construct(Link $model)
    {
        parent::__construct($model);
    }
}


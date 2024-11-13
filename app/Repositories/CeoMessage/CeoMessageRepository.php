<?php


namespace App\Repositories\CeoMessage;

use App\Constants\Type;
use App\Models\Page;
use App\Repositories\Core\CoreRepository;


class CeoMessageRepository extends CoreRepository implements CeoMessageInterface
{
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }
}


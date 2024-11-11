<?php


namespace App\Repositories\Contact;
use App\Repositories\Core\CoreRepository;
use App\Models\Contact;


class ContactRepository extends CoreRepository implements ContactInterface
{
    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }
}


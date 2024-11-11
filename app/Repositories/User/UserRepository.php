<?php


namespace App\Repositories\User;
use App\Repositories\Core\CoreRepository;
use App\Models\User;


class UserRepository extends CoreRepository implements UserInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}


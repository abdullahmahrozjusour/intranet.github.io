<?php


namespace App\Repositories\Request;

use App\Repositories\Core\CoreInterface;


interface RequestInterface extends CoreInterface
{
    public function getLastRequest();
}

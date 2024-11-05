<?php

namespace App\Repositories\Core;


interface CoreInterface {
    public function model(): object;
    public function index($options = []);
    public function paginateWithOrder($order_name,$order_value,$entries);
    public function show($id);
    public function store();
    public function update($id);
    public function storeOrUpdate($priKeyVal, $params = []);
    public function destroy($id);
    public function where($array = []);
}

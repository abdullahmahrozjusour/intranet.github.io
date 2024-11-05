<?php

namespace App\Repositories\Core;


abstract class CoreRepository implements CoreInterface
{

    protected $model;


    public function __construct($model)
    {
        $this->model = new $model;
    }


    public function model(): object
    {
        return $this->model;
    }


    public function index($options = [])
    {
        return $this->model()->all();
    }


    public function paginateWithOrder($order_name,$order_value,$entries)
    {
        return $this->model()->orderBy($order_name,$order_value)->paginate($entries);
    }


    public function show($id)
    {
        return $this->model()->find($id);
    }


    public function store($params = [])
    {
        /**todo: more enhancement required**/
        return $this->model()->create($params);
    }


    public function storeOrUpdate($priKeyVal, $params = [])
    {
        /**todo: more enhancement required**/
        if (!$this->model()->validate($params)) {
            return $this->model()->errors();
        } else {
            return $this->model()->updateOrCreate($priKeyVal, $params);
        }
    }


    public function update($id, $params = [], $where = [])
    {
        $record = $this->model()->find($id);
        if ($where) {
            $record->where($where);
        }
        $record->update($params);
        $record = $this->model()->find($id);


        return $record;
    }


    public function destroy($id)
    {
        return $this->model()->destroy($id);
    }

    public function where($array = [])
    {
        return $this->model()->where($array)->get();
    }
}

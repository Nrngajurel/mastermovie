<?php


namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;

class Cart
{
    public function __construct()
    {

    }

    public function add(Model $model)
    {
        return $model;
    }

    public function remove(int $id) :void
    {

    }
    public function clear() :void
    {

    }

    public function empty(): array
    {

    }

    public function get(): ?array
    {

    }

    public function set($cart):void
    {

    }

}

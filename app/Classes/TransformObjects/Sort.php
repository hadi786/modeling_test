<?php

namespace App\Classes\TransformObjects;

class Sort
{
    public $target;
    public $order;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

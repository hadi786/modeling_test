<?php

namespace App\Classes\TransformObjects;

class Text
{
    public $column;
    public $transformation;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

<?php

namespace App\Classes\QueryBuilder\TransformObjects;

class Input
{
    public $tableName;
    public $fields;

    public function __construct(array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

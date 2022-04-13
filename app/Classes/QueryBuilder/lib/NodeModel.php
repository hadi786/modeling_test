<?php

namespace App\Classes\QueryBuilder\lib;

use Rutek\Dataclass\Collection;

class NodeModel extends Collection
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }
}

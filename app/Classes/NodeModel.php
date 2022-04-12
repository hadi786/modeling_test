<?php

namespace App\Classes;

use Rutek\Dataclass\Collection;

class NodeModel extends Collection
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }
}

<?php namespace Shopavel\Warehouses;

use Shopavel\NestedSets\Node;

class Container extends Node implements ContainerInterface {

    protected $scoped = ['warehouse_id'];

    public function warehouse()
    {
        return $this->belongsTo('Shopavel\Warehouses\Warehouse');
    }

    public function stocks()
    {
        return $this->hasMany('Shopavel\Warehouses\Stock');
    }

    public function getWarehouse()
    {
        return $this->warehouse()->get();
    }

    public function getStocks()
    {
        return $this->stocks()->get();
    }

}
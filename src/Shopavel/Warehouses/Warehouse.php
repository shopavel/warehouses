<?php namespace Shopavel\Warehouses;

class Warehouse extends Model implements WarehouseInterface {

    public function address()
    {
        return $this->belongsTo('Shopavel\Addresses\Address');
    }
    
    public function getAddress()
    {
        return $this->address()->get();
    }

}
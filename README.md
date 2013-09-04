Warehouses package for Shopavel
==========


Installation
------------

Add `"shopavel/warehouses": "1.0.*"` to your `composer.json` and run `composer update`.


Configuration
-------------

In `app/config/app.php` add `'Shopavel\Warehouses\WarehousesServiceProvider'` to your `providers` list.


---

Warehouses
----------

Warehouses are used to store stock and consist of an address and containers. You can track the movement of stock batches through your warehouses and containers.


Containers
----------

Containers are nested set nodes, which allows you to nest containers as many levels deep as you need. These can represent anything from large shipping containers, shelves or a box on a shelf.


Non-Physical Warehouses & Containers
------------------------------------

Warehouses and containers do not have to represent a physical location, but can instead be used with digital products for locations such as `online` with containers of `website` and `email`. As such a non-physical warehouse would not have an associated address.


Stock Movements
---------------

When a product purchased from a supplier and sold to a customer it will move through various physical locations. These movements can be represented using the `StockMovement` model.

---


Usage
-----


**Move stock to a new container**

```php
app('warehouse.stock')->move(StockInterface $stock, ContainerInterface $from, ContainerInterface $to [, int $quantity]);
```
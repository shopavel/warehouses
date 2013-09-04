<?php namespace Shopavel\Warehouses\Transactions;

use Shopavel\Transactions\Transaction;

class StockTransactions extends Transaction {

    public function move(ContainerInterface $from, ContainerInterface $to, StockInterface $stock, $quantity = null)
    {
        $movement = new StockMovement([
            'from_id' => $from->id,
            'to_id' => $to->id,
            'stock_id' => $stock->id,
            'quantity' => $quantity ?: $stock->quantity
        ]);

        $this->validate($movement);

        $movement->save();
    }

}
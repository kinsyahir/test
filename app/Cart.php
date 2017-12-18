<?php

namespace App;


class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $total_price = 0;
	public $user_id = 0;

	public function __construct($oldCart)
	{
		if($oldCart)
		{
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->total_price = $oldCart->total_price;
			$this->user_id = $oldCart->user_id;
		}
	}


	public function add($item,$id)
	{
		$storedItem = [ 'qty' => 0, 'subject_price'=>$item->subject_price, 'item'=>$item];
		if($this->items)
		{
			if(array_key_exists($id, $this->items))
			{
				$storedItem = $this->items[$id];
			}
		}
		$storedItem['qty']++;
		$storedItem['total_price'] = $item->total_price+$item->subject_price;
		
		//stored the item
		$this->items[$id] = $storedItem;
		$this->total_price += $item->subject_price;
		$this->totalQty++;
	}

	public function addNewCustomer($id)
	{
		$this->user_id = $id;
	}

}  
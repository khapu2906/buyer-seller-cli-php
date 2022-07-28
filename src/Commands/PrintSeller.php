<?php

namespace App\Commands;

use App\Commands\Base;
use App\Resources\PrintingResource;
use App\Entities\Seller;
use App\Entities\Buyer;

class PrintSeller extends Base
{
	public string $command = 'print:seller';

	public function handle()
	{
		$sellers = [
			new Seller('a', 'a.com', 'a@gmail.com'),
			new Seller('b', 'b.com', 'b@gmail.com'),
			new Seller('c', 'c.com', 'c@gmail.com'),
			new Seller('d', 'd.com', 'd@gmail.com'),
			new Seller('e', 'e.com', 'e@gmail.com'),
		];

		foreach ($sellers as $k => $seller) {
			print_r("seller $k");
			$sr = new PrintingResource($seller);
			// var_dump($sr);
			print_r($sr->name());
			print_r($sr->toArray());
			print_r($sr->toJson());
			print_r('/n');
		}
	}

}
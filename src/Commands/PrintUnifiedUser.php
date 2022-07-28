<?php

namespace App\Commands;

use App\Commands\Base;
use App\Resources\PrintingResource;
use App\Entities\UnifiedUser;
use App\Entities\Seller;
use App\Entities\Buyer;

class PrintUnifiedUser extends Base
{
	public string $command = 'print:uu';

	public function handle()
	{
		$ps = [
			new Seller('a', 'a.com', 'a@gmail.com'),
			new Seller('b', 'b.com', 'b@gmail.com'),
			new Seller('c', 'c.com', 'c@gmail.com'),
			new Seller('d', 'd.com', 'd@gmail.com'),
			new Seller('e', 'e.com', 'e@gmail.com'),
			new Buyer('a', 'b', 'a@gmail.com', '0123456781'),
			new Buyer('b', 'c', 'b@gmail.com', '0123456782'),
			new Buyer('c', 'd', 'c@gmail.com', '0123456783'),
			new Buyer('d', 'e', 'd@gmail.com', '0123456784'),
			new Buyer('e', 'f', 'e@gmail.com', '0123456785'),
		];

		foreach ($ps as $k => $p) {
			$uu = new UnifiedUser($p);
			$sr = new PrintingResource($uu);
			print_r("{$sr->type()}  $k");
			// var_dump($sr);
			print_r($sr->name());
			print_r($sr->toArray());
			print_r($sr->toJson());
			print_r('/n');
		}
	}
}

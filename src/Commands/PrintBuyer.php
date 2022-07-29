<?php

namespace App\Commands;

use App\Commands\Base;
use App\Resources\PrintingResource;
use App\Entities\Buyer;

class PrintBuyer extends Base
{
	public static string $command = 'print:buyer';

	public static function handle()
	{
		$buyers = [
			new Buyer('a', 'b', 'a@gmail.com', '0123456781'),
			new Buyer('b', 'c', 'b@gmail.com', '0123456782'),
			new Buyer('c', 'd', 'c@gmail.com', '0123456783'),
			new Buyer('d', 'e', 'd@gmail.com', '0123456784'),
			new Buyer('e', 'f', 'e@gmail.com', '0123456785'),
		];

		foreach ($buyers as $k => $buyer) {
			print_r("buyer $k");
			$sr = new PrintingResource($buyer);
			// var_dump($sr);
			print_r($sr->name());
			print_r($sr->toArray());
			print_r($sr->toJson());
			print_r('\n');
		}
	}

}
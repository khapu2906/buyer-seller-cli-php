<?php

namespace App\Resources;

use App\Entities\{
	Buyer,
	Seller,
	UnifiedUser
};

class PrintingResource
{

	protected object $entity;

	protected array $conditions = [
		Buyer::class,
		Seller::class,
		UnifiedUser::class
	];

	public function __construct($entity)
	{
		$this->entity = $entity;
	}

	public function type()
	{
		foreach ($this->conditions as $v)
		{
			if ($this->entity instanceof $v) {
				return get_class($this->entity);
			}
		}

		die("Unknown type");
	}

	public function name()
	{
		if ($this->entity instanceof Buyer) {
			return "{$this->entity->firstName} {$this->entity->lastName}";
		}

		return $this->entity->name;
	}

	public function toArray()
	{
		$result = [];
		foreach ($this->entity as $a => $v) {
			$result[$a] = $v;
		}
		return $result;		
	}

	public function toJson() : string
	{
		return json_encode($this->entity, true);
	}

}
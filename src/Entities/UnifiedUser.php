<?php

namespace App\Entities;

use App\Entities\Buyer;
use App\Entities\Seller;

class UnifiedUser extends AbstractEntity
{

	public object $type;

	public string $name = '';

	public string $email = '';

	public string $phone = '';

	public function __construct(object $type)
	{
		$this->type = $type;

		$this->name = $this->getName();

		$this->email =  $this->getEmail();

		$this->phone = $this->getPhone();
	}


	public function getType()
	{
		return $this->type;
	}

	public function getName() : string
	{
		if ($this->type instanceof Buyer) {
			return "{$this->type->firstName} {$this->type->lastName}";
		}

		if ($this->type instanceof Seller) {
			return $this->name;
		}

		die('Error name type');
	}

	public function getEmail() : string
	{
		return $this->email;
	}

	public function getPhone() : string
	{
		return $this->phone;
	}

}
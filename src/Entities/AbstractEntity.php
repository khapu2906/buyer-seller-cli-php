<?php

namespace App\Entities;

abstract class AbstractEntity
{
	public function __get($name)
	{
		if (property_exists($this, $name)) {
			return $this->$name;
		}

		die("No such property exists");
	}

	public function __set($name, $value) : void
	{
		if (property_exists($this, $name)) {
			$this->$name = $value;
		}

		die("No such property exists");
	}
}
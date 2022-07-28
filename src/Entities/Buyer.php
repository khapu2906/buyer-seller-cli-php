<?php

namespace App\Entities;

class Buyer extends AbstractEntity
{

	public string $firstName = '';

	public string $lastName = '';
	
	public string $email = '';

	public string $phone = '';

	/**
	 *
	 * @param string $firstName
	 * @param string $lastName
	 * @param string $email
	 * @param string $phone
	 */
	public function __construct(string $firstName = '', string $lastName = '', string $email = '', string $phone = '')
	{
		$this->firstName = $firstName;

		$this->lastName = $lastName;

		$this->email = $email;

		$this->phone = $phone;
	}

	/**
	 *
	 * @return string
	 */
	public function getFirstName() : string
	{
		return $this->firstName;
	}

	/**
	 *
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName(string $firstName) : void
	{
		$this->firstName = $firstName;
	}

	/**
	 *
	 * @return string
	 */
	public function getLastName() : string
	{
		return $this->lastName;
	}

	/**
	 *
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName(string $lastName) : void
	{
		$this->lastName = $lastName;
	}

	/**
	 *
	 * @return string
	 */
	public function getEmail() : string
	{
		return $this->email;
	}

	/**
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail(string $email) : void
	{
		$this->email = $email;
	}

	/**
	 *
	 * @return string
	 */
	public function getPhone() : string
	{
		return $this->phone;
	}

	/**

	* @param string $phone
	 * @return void
	 */
	public function setPhone(string $phone)
	{
		$this->phone = $phone;
	}
}
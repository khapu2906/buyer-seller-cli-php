<?php

namespace App\Entities;

class Seller extends AbstractEntity
{

	public string $name = '';

	public string $websiteUrl = '';
	
	public string $email = '';

	/**
	 *
	 * @param string $name
	 * @param string $websiteUrl
	 * @param string $email
	 */
	public function __construct(string $name = '', string $websiteUrl = '', string $email = '')
	{
		$this->name = $name;

		$this->websiteUrl = $websiteUrl;

		$this->email = $email;
	}

	/**
	 *
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}

	/**
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName(string $name) : void
	{
		$this->name = $name;
	}

	/**
	 *
	 * @return string
	 */
	public function getWebsiteUrl() : string
	{
		return $this->websiteUrl;
	}

	/**
	 * 
	 * @param string $websiteUrl
	 * @return void
	 */
	public function setWebsiteUrl(string $websiteUrl) : void
	{
		$this->websiteUrl = $websiteUrl;
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

}
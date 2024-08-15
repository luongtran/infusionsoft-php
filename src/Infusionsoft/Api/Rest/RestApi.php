<?php

namespace Infusionsoft\Api;

use Infusionsoft\Infusionsoft;

abstract class RestAPI {

	public function __construct(Infusionsoft $client)
	{
		$this->client = $client;
	}

}
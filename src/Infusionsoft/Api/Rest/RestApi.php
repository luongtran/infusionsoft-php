<?php

namespace Infusionsoft\Api\Rest;

use Infusionsoft\Infusionsoft;

abstract class RestAPI {

	public function __construct(Infusionsoft $client)
	{
		$this->client = $client;
	}

}
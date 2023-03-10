<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;

use \tigris\core\Utils\SpeakeasyMetadata;

class SchemeBearerAuth
{
    #[SpeakeasyMetadata('security:name=Authorization')]
    public string $authorization;
    
	public function __construct()
	{
		$this->authorization = "";
	}
}

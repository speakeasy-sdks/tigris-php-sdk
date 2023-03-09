<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;

use \tigris\core\Utils\SpeakeasyMetadata;

class Security
{
    #[SpeakeasyMetadata('security:scheme=true,type=http,subtype=bearer')]
    public SchemeBearerAuth $bearerAuth;
    
	public function __construct()
	{
		$this->bearerAuth = new \tigris\core\Models\Shared\SchemeBearerAuth();
	}
}

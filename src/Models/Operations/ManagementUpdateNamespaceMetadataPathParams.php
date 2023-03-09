<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ManagementUpdateNamespaceMetadataPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=metadataKey')]
    public string $metadataKey;
    
	public function __construct()
	{
		$this->metadataKey = "";
	}
}

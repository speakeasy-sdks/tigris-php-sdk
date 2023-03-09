<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CacheDelPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=key')]
    public string $key;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=name')]
    public string $name;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->key = "";
		$this->name = "";
		$this->project = "";
	}
}

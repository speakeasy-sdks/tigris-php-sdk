<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisUpdatePathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=collection')]
    public string $collection;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->collection = "";
		$this->project = "";
	}
}

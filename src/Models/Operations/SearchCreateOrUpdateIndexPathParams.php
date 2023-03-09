<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchCreateOrUpdateIndexPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=name')]
    public string $name;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->name = "";
		$this->project = "";
	}
}

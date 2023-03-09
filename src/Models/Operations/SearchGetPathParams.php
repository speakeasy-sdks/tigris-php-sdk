<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchGetPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=index')]
    public string $index;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->index = "";
		$this->project = "";
	}
}

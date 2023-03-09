<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchCreateByIdPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=index')]
    public string $index;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->id = "";
		$this->index = "";
		$this->project = "";
	}
}

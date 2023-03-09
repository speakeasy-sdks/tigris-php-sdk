<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisDeleteBranchPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=branch')]
    public string $branch;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->branch = "";
		$this->project = "";
	}
}

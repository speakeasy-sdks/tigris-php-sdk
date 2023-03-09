<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchListIndexesQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter.branch')]
    public ?string $filterBranch = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter.collection')]
    public ?string $filterCollection = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter.type')]
    public ?string $filterType = null;
    
	public function __construct()
	{
		$this->filterBranch = null;
		$this->filterCollection = null;
		$this->filterType = null;
	}
}

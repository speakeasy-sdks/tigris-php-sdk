<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class RealtimeListSubscriptionsQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page')]
    public ?int $page = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page_size')]
    public ?int $pageSize = null;
    
	public function __construct()
	{
		$this->page = null;
		$this->pageSize = null;
	}
}

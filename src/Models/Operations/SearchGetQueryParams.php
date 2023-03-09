<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class SearchGetQueryParams
{
    /**
     * @var ?array<string>
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=ids')]
    public ?array $ids = null;
    
	public function __construct()
	{
		$this->ids = null;
	}
}

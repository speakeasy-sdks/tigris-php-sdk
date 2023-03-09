<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class CacheKeysQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=count')]
    public ?int $count = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=cursor')]
    public ?int $cursor = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=pattern')]
    public ?string $pattern = null;
    
	public function __construct()
	{
		$this->count = null;
		$this->cursor = null;
		$this->pattern = null;
	}
}

<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class TigrisListCollectionsQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=branch')]
    public ?string $branch = null;
    
	public function __construct()
	{
		$this->branch = null;
	}
}

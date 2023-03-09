<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class RealtimeListSubscriptionsPathParams
{
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=channel')]
    public string $channel;
    
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=project')]
    public string $project;
    
	public function __construct()
	{
		$this->channel = "";
		$this->project = "";
	}
}

<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class RealtimeReadMessagesQueryParams
{
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=end')]
    public ?string $end = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=event')]
    public ?string $event = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=limit')]
    public ?int $limit = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=session_id')]
    public ?string $sessionId = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=socket_id')]
    public ?string $socketId = null;
    
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=start')]
    public ?string $start = null;
    
	public function __construct()
	{
		$this->end = null;
		$this->event = null;
		$this->limit = null;
		$this->sessionId = null;
		$this->socketId = null;
		$this->start = null;
	}
}

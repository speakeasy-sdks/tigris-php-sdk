<?php

declare(strict_types=1);

namespace tigris\core\Models\Operations;

use \tigris\core\Utils\SpeakeasyMetadata;

class ObservabilityQueryTimeSeriesMetricsRequest
{
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public \tigris\core\Models\Shared\QueryTimeSeriesMetricsRequest $request;
    
	public function __construct()
	{
		$this->request = new \tigris\core\Models\Shared\QueryTimeSeriesMetricsRequest();
	}
}

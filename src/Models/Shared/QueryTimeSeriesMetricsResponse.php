<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * QueryTimeSeriesMetricsResponse
 * QueryTimeSeriesMetric responds with this type.
 */
class QueryTimeSeriesMetricsResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $from = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('query')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $query = null;
    
    /**
     * @var ?array<\tigris\core\Models\Shared\MetricSeries>
     */
    #[\JMS\Serializer\Annotation\SerializedName('series')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\MetricSeries>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $series = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $to = null;
    
	public function __construct()
	{
		$this->from = null;
		$this->query = null;
		$this->series = null;
		$this->to = null;
	}
}

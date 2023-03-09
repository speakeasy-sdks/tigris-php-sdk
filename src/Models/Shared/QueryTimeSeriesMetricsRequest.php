<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * QueryTimeSeriesMetricsRequest
 * Requests the time series metrics
 */
class QueryTimeSeriesMetricsRequest
{
    /**
     * @var ?array<\tigris\core\Models\Shared\AdditionalFunction>
     */
    #[\JMS\Serializer\Annotation\SerializedName('additionalFunctions')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\AdditionalFunction>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $additionalFunctions = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('collection')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $collection = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('db')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $db = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $from = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('function')]
    #[\JMS\Serializer\Annotation\Type('enum<tigris\core\Models\Shared\QueryTimeSeriesMetricsRequestFunctionEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?QueryTimeSeriesMetricsRequestFunctionEnum $function = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('metric_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metricName = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('quantile')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $quantile = null;
    
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('space_aggregated_by')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $spaceAggregatedBy = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('space_aggregation')]
    #[\JMS\Serializer\Annotation\Type('enum<tigris\core\Models\Shared\QueryTimeSeriesMetricsRequestSpaceAggregationEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?QueryTimeSeriesMetricsRequestSpaceAggregationEnum $spaceAggregation = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('tigris_operation')]
    #[\JMS\Serializer\Annotation\Type('enum<tigris\core\Models\Shared\QueryTimeSeriesMetricsRequestTigrisOperationEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?QueryTimeSeriesMetricsRequestTigrisOperationEnum $tigrisOperation = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $to = null;
    
	public function __construct()
	{
		$this->additionalFunctions = null;
		$this->branch = null;
		$this->collection = null;
		$this->db = null;
		$this->from = null;
		$this->function = null;
		$this->metricName = null;
		$this->quantile = null;
		$this->spaceAggregatedBy = null;
		$this->spaceAggregation = null;
		$this->tigrisOperation = null;
		$this->to = null;
	}
}

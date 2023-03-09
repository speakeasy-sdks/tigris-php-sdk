<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * MetricSeries
 * Represents series in timeseries based on input query.
 */
class MetricSeries
{
    /**
     * @var ?array<\tigris\core\Models\Shared\DataPoint>
     */
    #[\JMS\Serializer\Annotation\SerializedName('dataPoints')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\DataPoint>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $dataPoints = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('from')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $from = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('metric')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metric = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('scope')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $scope = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('to')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $to = null;
    
	public function __construct()
	{
		$this->dataPoints = null;
		$this->from = null;
		$this->metric = null;
		$this->scope = null;
		$this->to = null;
	}
}

<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class DescribeDatabaseRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('branch')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $branch = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('schema_format')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $schemaFormat = null;
    
	public function __construct()
	{
		$this->branch = null;
		$this->project = null;
		$this->schemaFormat = null;
	}
}

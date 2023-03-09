<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class UpdateResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\ResponseMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseMetadata $metadata = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('modified_count')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $modifiedCount = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->metadata = null;
		$this->modifiedCount = null;
		$this->status = null;
	}
}

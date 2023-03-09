<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ImportResponse
{
    /**
     * @var ?array<string>
     */
    #[\JMS\Serializer\Annotation\SerializedName('keys')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $keys = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\ResponseMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseMetadata $metadata = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->keys = null;
		$this->metadata = null;
		$this->status = null;
	}
}

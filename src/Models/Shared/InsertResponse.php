<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class InsertResponse
{
    /**
     * an array returns the value of the primary keys.
     * 
     * @var ?array<string> $keys
     */
	#[\JMS\Serializer\Annotation\SerializedName('keys')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $keys = null;
    
    /**
     * Has metadata related to the documents stored.
     * 
     * @var ?\tigris\core\Models\Shared\ResponseMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\ResponseMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ResponseMetadata $metadata = null;
    
    /**
     * An enum with value set as "inserted"
     * 
     * @var ?string $status
     */
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

<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class ReadResponse
{
    /**
     * Object containing the collection document.
     * 
     * @var ?array<string, mixed> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $data = null;
    
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
     * An internal key, used for pagination.
     * 
     * @var ?string $resumeToken
     */
	#[\JMS\Serializer\Annotation\SerializedName('resume_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $resumeToken = null;
    
	public function __construct()
	{
		$this->data = null;
		$this->metadata = null;
		$this->resumeToken = null;
	}
}
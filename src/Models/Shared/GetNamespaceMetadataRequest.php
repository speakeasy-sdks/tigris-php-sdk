<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * GetNamespaceMetadataRequest - Request namespace metadata
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class GetNamespaceMetadataRequest
{
	#[\JMS\Serializer\Annotation\SerializedName('metadataKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadataKey = null;
    
    /**
     * $value
     * 
     * @var ?array<string, mixed> $value
     */
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $value = null;
    
	public function __construct()
	{
		$this->metadataKey = null;
		$this->value = null;
	}
}
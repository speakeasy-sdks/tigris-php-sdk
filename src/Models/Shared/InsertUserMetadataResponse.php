<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * InsertUserMetadataResponse - Insertion of user metadata response
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class InsertUserMetadataResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('metadataKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadataKey = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('namespaceId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $namespaceId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('userId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $userId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\InsertUserMetadataResponseValue')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?InsertUserMetadataResponseValue $value = null;
    
	public function __construct()
	{
		$this->metadataKey = null;
		$this->namespaceId = null;
		$this->userId = null;
		$this->value = null;
	}
}

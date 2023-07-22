<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * InsertUserMetadataRequest - Request insertion of user metadata
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class InsertUserMetadataRequest
{
	#[\JMS\Serializer\Annotation\SerializedName('metadataKey')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $metadataKey = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\InsertUserMetadataRequestValue')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?InsertUserMetadataRequestValue $value = null;
    
	public function __construct()
	{
		$this->metadataKey = null;
		$this->value = null;
	}
}

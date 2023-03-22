<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * ListAppKeysResponse - ListAppKeysResponse returns one or more visible app keys to user
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class ListAppKeysResponse
{
    /**
     * $appKeys
     * 
     * @var ?array<\tigris\core\Models\Shared\AppKey> $appKeys
     */
	#[\JMS\Serializer\Annotation\SerializedName('app_keys')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\AppKey>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $appKeys = null;
    
	public function __construct()
	{
		$this->appKeys = null;
	}
}
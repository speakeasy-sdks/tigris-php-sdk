<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class CreateCacheRequest
{
	#[\JMS\Serializer\Annotation\SerializedName('options')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\CreateCacheOptions')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateCacheOptions $options = null;
    
	public function __construct()
	{
		$this->options = null;
	}
}
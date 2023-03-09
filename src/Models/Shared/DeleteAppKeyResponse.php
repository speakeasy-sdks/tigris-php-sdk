<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * DeleteAppKeyResponse
 * AppKeys returns the flag to convey if app key was deleted
 */
class DeleteAppKeyResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('deleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $deleted = null;
    
	public function __construct()
	{
		$this->deleted = null;
	}
}

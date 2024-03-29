<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class MessagesResponse
{
    /**
     * ids of the published messages
     * 
     * @var ?array<string> $ids
     */
	#[\JMS\Serializer\Annotation\SerializedName('ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $ids = null;
    
	public function __construct()
	{
		$this->ids = null;
	}
}

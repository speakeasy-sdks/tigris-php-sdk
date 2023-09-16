<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class UpdateDocumentResponse
{
    /**
     * An array of statuses of all the documents received in the request. Order is same as it is received in the request. Each item of this array has an “id” and “error” key. Id is set as document id and error will be null in case of success, otherwise error is set with an error code and message.
     * 
     * @var ?array<\tigris\core\Models\Shared\DocStatus> $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\DocStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $status = null;
    
	public function __construct()
	{
		$this->status = null;
	}
}

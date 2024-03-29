<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


class DescribeNamespacesResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\DescribeNamespacesData')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DescribeNamespacesData $data = null;
    
	public function __construct()
	{
		$this->data = null;
	}
}

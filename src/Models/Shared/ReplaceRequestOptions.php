<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * ReplaceRequestOptions
 * Additional options for replace requests.
 */
class ReplaceRequestOptions
{
    /**
     * @var ?array<string, mixed>
     */
    #[\JMS\Serializer\Annotation\SerializedName('write_options')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $writeOptions = null;
    
	public function __construct()
	{
		$this->writeOptions = null;
	}
}

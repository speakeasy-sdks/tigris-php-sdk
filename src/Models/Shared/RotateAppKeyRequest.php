<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * RotateAppKeyRequest
 * Request rotation of an app key secret
 */
class RotateAppKeyRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('project')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $project = null;
    
	public function __construct()
	{
		$this->id = null;
		$this->project = null;
	}
}

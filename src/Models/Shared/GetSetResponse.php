<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class GetSetResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('old_value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $oldValue = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->oldValue = null;
		$this->status = null;
	}
}

<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * Error
 * The Error type defines a logical error model
 */
class Error
{
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<tigris\core\Models\Shared\ErrorCodeEnum>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ErrorCodeEnum $code = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->message = null;
	}
}

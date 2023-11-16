<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * Error - The Error type defines a logical error model
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class Error
{
    /**
     * The status code is a short, machine parsable string, which uniquely identifies the error type. Tigris to HTTP code mapping [here](/reference/http-code)
     * 
     * @var ?\tigris\core\Models\Shared\Code $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<tigris\core\Models\Shared\Code>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Code $code = null;
    
    /**
     * A developer-facing descriptive error message
     * 
     * @var ?string $message
     */
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

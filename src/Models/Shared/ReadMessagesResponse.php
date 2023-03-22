<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * ReadMessagesResponse - OK
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class ReadMessagesResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Message')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Message $message = null;
    
	public function __construct()
	{
		$this->message = null;
	}
}
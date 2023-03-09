<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class StreamingReadResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Error')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Error $error = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('result')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\ReadResponse')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ReadResponse $result = null;
    
	public function __construct()
	{
		$this->error = null;
		$this->result = null;
	}
}

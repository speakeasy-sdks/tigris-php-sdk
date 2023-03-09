<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class Status
{
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Error')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Error $error = null;
    
	public function __construct()
	{
		$this->error = null;
	}
}

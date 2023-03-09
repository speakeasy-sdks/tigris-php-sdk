<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class DocStatus
{
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\Error')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Error $error = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	public function __construct()
	{
		$this->error = null;
		$this->id = null;
	}
}

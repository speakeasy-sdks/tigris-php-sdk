<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class DescribeNamespacesData
{
    #[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $details = null;
    
	public function __construct()
	{
		$this->details = null;
	}
}

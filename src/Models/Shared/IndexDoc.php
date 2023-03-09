<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class IndexDoc
{
    #[\JMS\Serializer\Annotation\SerializedName('doc')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $doc = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('tigris\core\Models\Shared\DocMeta')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DocMeta $metadata = null;
    
	public function __construct()
	{
		$this->doc = null;
		$this->metadata = null;
	}
}

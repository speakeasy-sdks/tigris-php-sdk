<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * Collation
 * A collation allows you to specify string comparison rules. Default is case-sensitive, to override it you can set this option to 'ci' that will apply to all the text fields in the filters.
 */
class Collation
{
    #[\JMS\Serializer\Annotation\SerializedName('case')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $case = null;
    
	public function __construct()
	{
		$this->case = null;
	}
}

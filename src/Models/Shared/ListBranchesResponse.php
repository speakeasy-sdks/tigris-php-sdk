<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListBranchesResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\BranchInfo>
     */
    #[\JMS\Serializer\Annotation\SerializedName('branches')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\BranchInfo>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $branches = null;
    
	public function __construct()
	{
		$this->branches = null;
	}
}

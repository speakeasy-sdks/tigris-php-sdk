<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class ListProjectsResponse
{
    /**
     * @var ?array<\tigris\core\Models\Shared\ProjectInfo>
     */
    #[\JMS\Serializer\Annotation\SerializedName('projects')]
    #[\JMS\Serializer\Annotation\Type('array<tigris\core\Models\Shared\ProjectInfo>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $projects = null;
    
	public function __construct()
	{
		$this->projects = null;
	}
}

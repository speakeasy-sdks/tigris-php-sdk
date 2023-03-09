<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;



class SetRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('ex')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $ex = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('nx')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $nx = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('px')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $px = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('value')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $value = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('xx')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $xx = null;
    
	public function __construct()
	{
		$this->ex = null;
		$this->nx = null;
		$this->px = null;
		$this->value = null;
		$this->xx = null;
	}
}

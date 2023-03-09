<?php

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * GetAccessTokenResponse
 * The response of GetAccessToken which contains access_token and optionally refresh_token.
 */
class GetAccessTokenResponse
{
    #[\JMS\Serializer\Annotation\SerializedName('access_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $accessToken = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('expires_in')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $expiresIn = null;
    
    #[\JMS\Serializer\Annotation\SerializedName('refresh_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $refreshToken = null;
    
	public function __construct()
	{
		$this->accessToken = null;
		$this->expiresIn = null;
		$this->refreshToken = null;
	}
}

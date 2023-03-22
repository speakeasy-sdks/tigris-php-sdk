<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core\Models\Shared;


/**
 * GetAccessTokenResponse - The response of GetAccessToken which contains access_token and optionally refresh_token.
 * 
 * @package tigris\core\Models\Shared
 * @access public
 */
class GetAccessTokenResponse
{
    /**
     * An Access Token.
     * 
     * @var ?string $accessToken
     */
	#[\JMS\Serializer\Annotation\SerializedName('access_token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $accessToken = null;
    
    /**
     * Access token expiration timeout in seconds.
     * 
     * @var ?int $expiresIn
     */
	#[\JMS\Serializer\Annotation\SerializedName('expires_in')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $expiresIn = null;
    
    /**
     * The Refresh Token.
     * 
     * @var ?string $refreshToken
     */
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

<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '0.0.1';
	public string $sdkVersion = '0.51.0';
	public string $genVersion = '2.181.1';
	public string $userAgent = 'speakeasy-sdk/php 0.51.0 2.181.1 0.0.1 tigris-data/tigris-api';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return SDK::SERVERS[$this->serverIndex];
	}
	
}
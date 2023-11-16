<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core;

class Auth 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Access Token
     * 
     * Endpoint for receiving access token from Tigris Server. The endpoint requires Grant Type(`grant_type`) which has
     *  two possible values <i>"REFRESH_TOKEN"</i> or <i>"CLIENT_CREDENTIALS"</i> based on which either Refresh token(`refresh_token`)
     *  needs to be set or client credentials(`client_id`, `client_secret`).
     * 
     * @return \tigris\core\Models\Operations\AuthGetAccessTokenResponse
     */
	public function get(
    ): \tigris\core\Models\Operations\AuthGetAccessTokenResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/auth/token');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \tigris\core\Models\Operations\AuthGetAccessTokenResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getAccessTokenResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetAccessTokenResponse', 'json');
            }
        }
        else {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->status = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\Status', 'json');
            }
        }

        return $response;
    }
}
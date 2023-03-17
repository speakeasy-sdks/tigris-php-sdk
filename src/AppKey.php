<?php

declare(strict_types=1);

namespace tigris\core;

class AppKey 
{

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;	

	/**
	 * @param \GuzzleHttp\ClientInterface $defaultClient
	 * @param \GuzzleHttp\ClientInterface $securityClient
	 * @param string $serverUrl
	 * @param string $language
	 * @param string $sdkVersion
	 * @param string $genVersion
	 */
	public function __construct(\GuzzleHttp\ClientInterface $defaultClient, \GuzzleHttp\ClientInterface $securityClient, string $serverUrl, string $language, string $sdkVersion, string $genVersion)
	{
		$this->_defaultClient = $defaultClient;
		$this->_securityClient = $securityClient;
		$this->_serverUrl = $serverUrl;
		$this->_language = $language;
		$this->_sdkVersion = $sdkVersion;
		$this->_genVersion = $genVersion;
	}
	
    /**
     * delete - Deletes the app key
     *
     * Delete an app key.
     * @param \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest $request
    */
    public function delete(
        \tigris\core\Models\Operations\TigrisDeleteAppKeyRequest $request,
    ): \tigris\core\Models\Operations\TigrisDeleteAppKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/apps/keys/delete', \tigris\core\Models\Operations\TigrisDeleteAppKeyPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\TigrisDeleteAppKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteAppKeyResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\DeleteAppKeyResponse', 'json');
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
	
    /**
     * list - List all the app keys
     *
     * Lists all app keys visible to requesting actor.
     * @param \tigris\core\Models\Operations\TigrisListAppKeysRequest $request
    */
    public function list(
        \tigris\core\Models\Operations\TigrisListAppKeysRequest $request,
    ): \tigris\core\Models\Operations\TigrisListAppKeysResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/apps/keys', \tigris\core\Models\Operations\TigrisListAppKeysPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\TigrisListAppKeysResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listAppKeysResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\ListAppKeysResponse', 'json');
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
	
    /**
     * rotate - Rotates the app key secret
     *
     * Endpoint is used to rotate the secret for the app key.
     * @param \tigris\core\Models\Operations\TigrisRotateAppKeySecretRequest $request
    */
    public function rotate(
        \tigris\core\Models\Operations\TigrisRotateAppKeySecretRequest $request,
    ): \tigris\core\Models\Operations\TigrisRotateAppKeySecretResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/apps/keys/rotate', \tigris\core\Models\Operations\TigrisRotateAppKeySecretPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\TigrisRotateAppKeySecretResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->rotateAppKeyResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\RotateAppKeyResponse', 'json');
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
	
    /**
     * tigrisCreateAppKey - Creates the app key
     *
     * Create an app key.
     * @param \tigris\core\Models\Operations\TigrisCreateAppKeyRequest $request
    */
    public function tigrisCreateAppKey(
        \tigris\core\Models\Operations\TigrisCreateAppKeyRequest $request,
    ): \tigris\core\Models\Operations\TigrisCreateAppKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/apps/keys/create', \tigris\core\Models\Operations\TigrisCreateAppKeyPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\TigrisCreateAppKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createAppKeyResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\CreateAppKeyResponse', 'json');
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
	
    /**
     * update - Updates the description of the app key
     *
     * Update the description of an app key.
     * @param \tigris\core\Models\Operations\TigrisUpdateAppKeyRequest $request
    */
    public function update(
        \tigris\core\Models\Operations\TigrisUpdateAppKeyRequest $request,
    ): \tigris\core\Models\Operations\TigrisUpdateAppKeyResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/apps/keys/update', \tigris\core\Models\Operations\TigrisUpdateAppKeyPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\TigrisUpdateAppKeyResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateAppKeyResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\UpdateAppKeyResponse', 'json');
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
<?php

declare(strict_types=1);

namespace tigris\core;

class Cache 
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
     * create - Creates the cache
     * @param \tigris\core\Models\Operations\CacheCreateCacheRequest $request
    */
    public function create(
        \tigris\core\Models\Operations\CacheCreateCacheRequest $request,
    ): \tigris\core\Models\Operations\CacheCreateCacheResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/create', \tigris\core\Models\Operations\CacheCreateCachePathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheCreateCacheResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createCacheResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\CreateCacheResponse', 'json');
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
     * delete - Deletes the cache
     * @param \tigris\core\Models\Operations\CacheDeleteCacheRequest $request
    */
    public function delete(
        \tigris\core\Models\Operations\CacheDeleteCacheRequest $request,
    ): \tigris\core\Models\Operations\CacheDeleteCacheResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/delete', \tigris\core\Models\Operations\CacheDeleteCachePathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheDeleteCacheResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deleteCacheResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\DeleteCacheResponse', 'json');
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
     * deleteKeys - Deletes an entry from cache
     * @param \tigris\core\Models\Operations\CacheDelRequest $request
    */
    public function deleteKeys(
        \tigris\core\Models\Operations\CacheDelRequest $request,
    ): \tigris\core\Models\Operations\CacheDelResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/{key}/delete', \tigris\core\Models\Operations\CacheDelPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheDelResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->delResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\DelResponse', 'json');
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
     * getKey - Reads an entry from cache
     * @param \tigris\core\Models\Operations\CacheGetRequest $request
    */
    public function getKey(
        \tigris\core\Models\Operations\CacheGetRequest $request,
    ): \tigris\core\Models\Operations\CacheGetResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/{key}/get', \tigris\core\Models\Operations\CacheGetPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheGetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetResponse', 'json');
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
     * getSetKey - Sets an entry in the cache and returns the previous value if exists
     * @param \tigris\core\Models\Operations\CacheGetSetRequest $request
    */
    public function getSetKey(
        \tigris\core\Models\Operations\CacheGetSetRequest $request,
    ): \tigris\core\Models\Operations\CacheGetSetResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/{key}/getset', \tigris\core\Models\Operations\CacheGetSetPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheGetSetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getSetResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetSetResponse', 'json');
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
     * list - Lists all the caches for the given project
     * @param \tigris\core\Models\Operations\CacheListCachesRequest $request
    */
    public function list(
        \tigris\core\Models\Operations\CacheListCachesRequest $request,
    ): \tigris\core\Models\Operations\CacheListCachesResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/list', \tigris\core\Models\Operations\CacheListCachesPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheListCachesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listCachesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\ListCachesResponse', 'json');
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
     * listKeys - Lists all the key for this cache
     * @param \tigris\core\Models\Operations\CacheKeysRequest $request
    */
    public function listKeys(
        \tigris\core\Models\Operations\CacheKeysRequest $request,
    ): \tigris\core\Models\Operations\CacheKeysResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/keys', \tigris\core\Models\Operations\CacheKeysPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\tigris\core\Models\Operations\CacheKeysQueryParams::class, $request->queryParams, null));
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheKeysResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->keysResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\KeysResponse', 'json');
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
     * setKey - Sets an entry in the cache
     * @param \tigris\core\Models\Operations\CacheSetRequest $request
    */
    public function setKey(
        \tigris\core\Models\Operations\CacheSetRequest $request,
    ): \tigris\core\Models\Operations\CacheSetResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/projects/{project}/caches/{name}/{key}/set', \tigris\core\Models\Operations\CacheSetPathParams::class, $request->pathParams);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CacheSetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->setResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\SetResponse', 'json');
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
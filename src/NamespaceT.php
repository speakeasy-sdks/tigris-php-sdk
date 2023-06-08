<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace tigris\core;

class NamespaceT 
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
     * Creates a Namespace
     * 
     * Creates a new namespace, if it does not exist
     * 
     * @param \tigris\core\Models\Shared\CreateNamespaceRequest $request
     * @return \tigris\core\Models\Operations\CreateNamespaceResponse
     */
	public function create(
        \tigris\core\Models\Shared\CreateNamespaceRequest $request,
    ): \tigris\core\Models\Operations\CreateNamespaceResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/management/namespaces/create');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\CreateNamespaceResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createNamespaceResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\CreateNamespaceResponse', 'json');
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
     * Describe the details of all namespaces
     * 
     * Get details for all namespaces
     * 
     * @return \tigris\core\Models\Operations\ManagementDescribeNamespacesResponse
     */
	public function get(
    ): \tigris\core\Models\Operations\ManagementDescribeNamespacesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/management/namespaces/describe');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ManagementDescribeNamespacesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->describeNamespacesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\DescribeNamespacesResponse', 'json');
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
     * Reads the Namespace Metadata
     * 
     * GetNamespaceMetadata inserts the user metadata object
     * 
     * @param \tigris\core\Models\Operations\ManagementGetNamespaceMetadataRequest $request
     * @return \tigris\core\Models\Operations\ManagementGetNamespaceMetadataResponse
     */
	public function getMetadata(
        \tigris\core\Models\Operations\ManagementGetNamespaceMetadataRequest $request,
    ): \tigris\core\Models\Operations\ManagementGetNamespaceMetadataResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/management/namespace/metadata/{metadataKey}/get', \tigris\core\Models\Operations\ManagementGetNamespaceMetadataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "getNamespaceMetadataRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ManagementGetNamespaceMetadataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getNamespaceMetadataResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetNamespaceMetadataResponse', 'json');
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
     * Inserts Namespace Metadata
     * 
     * InsertNamespaceMetadata inserts the namespace metadata object
     * 
     * @param \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataRequest $request
     * @return \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataResponse
     */
	public function insertMetadata(
        \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataRequest $request,
    ): \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/management/namespace/metadata/{metadataKey}/insert', \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "insertNamespaceMetadataRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ManagementInsertNamespaceMetadataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->insertNamespaceMetadataResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\InsertNamespaceMetadataResponse', 'json');
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
     * Lists all Namespaces
     * 
     * List all namespace
     * 
     * @return \tigris\core\Models\Operations\ManagementListNamespacesResponse
     */
	public function list(
    ): \tigris\core\Models\Operations\ManagementListNamespacesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/management/namespaces/list');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ManagementListNamespacesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listNamespacesResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\ListNamespacesResponse', 'json');
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
     * Updates Namespace Metadata
     * 
     * UpdateNamespaceMetadata updates the user metadata object
     * 
     * @param \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataRequest $request
     * @return \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataResponse
     */
	public function updateMetadata(
        \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataRequest $request,
    ): \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/v1/management/namespace/metadata/{metadataKey}/update', \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "updateNamespaceMetadataRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/json;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ManagementUpdateNamespaceMetadataResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->updateNamespaceMetadataResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\UpdateNamespaceMetadataResponse', 'json');
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
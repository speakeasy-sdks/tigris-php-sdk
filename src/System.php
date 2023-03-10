<?php

declare(strict_types=1);

namespace tigris\core;

class System 
{
	
	
	
	
	
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private \GuzzleHttp\ClientInterface $_defaultClient;
	private \GuzzleHttp\ClientInterface $_securityClient;
	private string $_serverUrl;
	private string $_language;
	private string $_sdkVersion;
	private string $_genVersion;

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
     * getHealth - Health Check
     *
     * This endpoint can be used to check the liveness of the server.
    */
    public function getHealth(
    ): \tigris\core\Models\Operations\HealthAPIHealthResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/health');
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\HealthAPIHealthResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->healthCheckResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\HealthCheckResponse', 'json');
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
     * getServerInfo - Information about the server
     *
     * Provides the information about the server. This information includes returning the server version, etc.
    */
    public function getServerInfo(
    ): \tigris\core\Models\Operations\ObservabilityGetInfoResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/observability/info');
        
        $options = ['http_errors' => false];
        
        $httpResponse = $this->_securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ObservabilityGetInfoResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->getInfoResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\GetInfoResponse', 'json');
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
     * observabilityQuotaUsage - Queries current namespace quota usage
     *
     * Returns current namespace quota limits
    */
    public function observabilityQuotaUsage(
        \tigris\core\Models\Operations\ObservabilityQuotaUsageRequest $request,
    ): \tigris\core\Models\Operations\ObservabilityQuotaUsageResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/observability/quota/usage');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ObservabilityQuotaUsageResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->quotaUsageResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\QuotaUsageResponse', 'json');
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
     * queryQuotaLimits - Queries current namespace quota limits
     *
     * Returns current namespace quota limits
    */
    public function queryQuotaLimits(
        \tigris\core\Models\Operations\ObservabilityQuotaLimitsRequest $request,
    ): \tigris\core\Models\Operations\ObservabilityQuotaLimitsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/observability/quota/limits');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ObservabilityQuotaLimitsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->quotaLimitsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\QuotaLimitsResponse', 'json');
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
     * queryTimeSeriesMetrics - Queries time series metrics
     *
     * Queries time series metrics
    */
    public function queryTimeSeriesMetrics(
        \tigris\core\Models\Operations\ObservabilityQueryTimeSeriesMetricsRequest $request,
    ): \tigris\core\Models\Operations\ObservabilityQueryTimeSeriesMetricsResponse
    {
        $baseUrl = $this->_serverUrl;
        $url = Utils\Utils::generateURL($baseUrl, '/v1/observability/metrics/timeseries/query');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request);
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        
        $httpResponse = $this->_securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \tigris\core\Models\Operations\ObservabilityQueryTimeSeriesMetricsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->queryTimeSeriesMetricsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'tigris\core\Models\Shared\QueryTimeSeriesMetricsResponse', 'json');
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
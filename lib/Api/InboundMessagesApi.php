<?php
/**
 * InboundMessagesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Telgorithm Messaging API
 *
 * In our APIs we use a rate limit. The rate limit is the maximum number of calls you want to allow in a particular time interval. Setting rate limits helps us to provide the best performance of integration between your software and Telgorithm by preventing other clients from affecting you.    Despite the fact that there is no accepted standard for HTTP rate-limiting headers, we were guided by [**IETF draft: RateLimit Fields for HTTP**](https://www.ietf.org/archive/id/draft-ietf-httpapi-ratelimit-headers-05.html).      We use these HTTP headers on APIs endpoints:    ``` RateLimit-Limit: containing the requests quota in the time window; RateLimit-Remaining: containing a non-negative integer which represents the remaining requests quota in the current time window; RateLimit-Reset: amount of seconds when the full quota will be available; ```  Default quotas:  | Endpoint                             | Default            | | ------------------------------------ | ------------------ | | POST `messaging/v1/OutboundMessages` | 100 per 10 seconds       | | POST `messaging/v1/Phones`           | 120 per hour        | | All REST GET endpoints               | 100 per 10 seconds | | REST non-GET endpoints               | 100 per 10 seconds  |  When quota is exceeded, server do not serve the request replying instead with a 429 HTTP status code.    If you need a bigger quota [contact us](mailto:support@telgorithm.com).
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * InboundMessagesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InboundMessagesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'v1InboundMessagesGet' => [
            'application/json',
        ],
        'v1InboundMessagesSidGet' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation v1InboundMessagesGet
     *
     * Get all inbound messages.
     *
     * @param  string $created_on_from Date-time, that Inbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  string $created_on_to Date-time, that Inbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  int $page_size page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction order_by_direction (optional)
     * @param  string $search_id search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InboundMessageModelPaginatedResult|\OpenAPI\Client\Model\ValidationProblemDetails
     */
    public function v1InboundMessagesGet($created_on_from = null, $created_on_to = null, $include_fees = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1InboundMessagesGet'][0])
    {
        list($response) = $this->v1InboundMessagesGetWithHttpInfo($created_on_from, $created_on_to, $include_fees, $page_size, $order_by_direction, $search_id, $contentType);
        return $response;
    }

    /**
     * Operation v1InboundMessagesGetWithHttpInfo
     *
     * Get all inbound messages.
     *
     * @param  string $created_on_from Date-time, that Inbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  string $created_on_to Date-time, that Inbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InboundMessageModelPaginatedResult|\OpenAPI\Client\Model\ValidationProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1InboundMessagesGetWithHttpInfo($created_on_from = null, $created_on_to = null, $include_fees = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1InboundMessagesGet'][0])
    {
        $request = $this->v1InboundMessagesGetRequest($created_on_from, $created_on_to, $include_fees, $page_size, $order_by_direction, $search_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\InboundMessageModelPaginatedResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\InboundMessageModelPaginatedResult' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InboundMessageModelPaginatedResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\ValidationProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ValidationProblemDetails' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ValidationProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InboundMessageModelPaginatedResult';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InboundMessageModelPaginatedResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ValidationProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1InboundMessagesGetAsync
     *
     * Get all inbound messages.
     *
     * @param  string $created_on_from Date-time, that Inbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  string $created_on_to Date-time, that Inbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1InboundMessagesGetAsync($created_on_from = null, $created_on_to = null, $include_fees = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1InboundMessagesGet'][0])
    {
        return $this->v1InboundMessagesGetAsyncWithHttpInfo($created_on_from, $created_on_to, $include_fees, $page_size, $order_by_direction, $search_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1InboundMessagesGetAsyncWithHttpInfo
     *
     * Get all inbound messages.
     *
     * @param  string $created_on_from Date-time, that Inbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  string $created_on_to Date-time, that Inbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1InboundMessagesGetAsyncWithHttpInfo($created_on_from = null, $created_on_to = null, $include_fees = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1InboundMessagesGet'][0])
    {
        $returnType = '\OpenAPI\Client\Model\InboundMessageModelPaginatedResult';
        $request = $this->v1InboundMessagesGetRequest($created_on_from, $created_on_to, $include_fees, $page_size, $order_by_direction, $search_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1InboundMessagesGet'
     *
     * @param  string $created_on_from Date-time, that Inbound message creation should be greater or equal than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  string $created_on_to Date-time, that Inbound message creation should be less than.  &lt;br&gt;&lt;b&gt;Must have ISO format (e.g. yyyy-MM-dd&#39;T&#39;HH:mm:ss)&lt;/b&gt; (optional)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1InboundMessagesGetRequest($created_on_from = null, $created_on_to = null, $include_fees = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1InboundMessagesGet'][0])
    {




        if ($page_size !== null && $page_size > 10000) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling InboundMessagesApi.v1InboundMessagesGet, must be smaller than or equal to 10000.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling InboundMessagesApi.v1InboundMessagesGet, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/v1/InboundMessages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_on_from,
            'CreatedOnFrom', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_on_to,
            'CreatedOnTo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_fees,
            'includeFees', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'PageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by_direction,
            'OrderByDirection', // param base name
            'OrderByDirections', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search_id,
            'SearchId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation v1InboundMessagesSidGet
     *
     * Get an inbound message.
     *
     * @param  string $sid Inbound Message Sid. (required)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesSidGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\InboundMessageModel|\OpenAPI\Client\Model\ValidationProblemDetails|\OpenAPI\Client\Model\ProblemDetails
     */
    public function v1InboundMessagesSidGet($sid, $include_fees = null, string $contentType = self::contentTypes['v1InboundMessagesSidGet'][0])
    {
        list($response) = $this->v1InboundMessagesSidGetWithHttpInfo($sid, $include_fees, $contentType);
        return $response;
    }

    /**
     * Operation v1InboundMessagesSidGetWithHttpInfo
     *
     * Get an inbound message.
     *
     * @param  string $sid Inbound Message Sid. (required)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesSidGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\InboundMessageModel|\OpenAPI\Client\Model\ValidationProblemDetails|\OpenAPI\Client\Model\ProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1InboundMessagesSidGetWithHttpInfo($sid, $include_fees = null, string $contentType = self::contentTypes['v1InboundMessagesSidGet'][0])
    {
        $request = $this->v1InboundMessagesSidGetRequest($sid, $include_fees, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\InboundMessageModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\InboundMessageModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\InboundMessageModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\OpenAPI\Client\Model\ValidationProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ValidationProblemDetails' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ValidationProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\OpenAPI\Client\Model\ProblemDetails' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\ProblemDetails' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\ProblemDetails', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\InboundMessageModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\InboundMessageModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ValidationProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation v1InboundMessagesSidGetAsync
     *
     * Get an inbound message.
     *
     * @param  string $sid Inbound Message Sid. (required)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesSidGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1InboundMessagesSidGetAsync($sid, $include_fees = null, string $contentType = self::contentTypes['v1InboundMessagesSidGet'][0])
    {
        return $this->v1InboundMessagesSidGetAsyncWithHttpInfo($sid, $include_fees, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1InboundMessagesSidGetAsyncWithHttpInfo
     *
     * Get an inbound message.
     *
     * @param  string $sid Inbound Message Sid. (required)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesSidGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1InboundMessagesSidGetAsyncWithHttpInfo($sid, $include_fees = null, string $contentType = self::contentTypes['v1InboundMessagesSidGet'][0])
    {
        $returnType = '\OpenAPI\Client\Model\InboundMessageModel';
        $request = $this->v1InboundMessagesSidGetRequest($sid, $include_fees, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'v1InboundMessagesSidGet'
     *
     * @param  string $sid Inbound Message Sid. (required)
     * @param  bool $include_fees If &#x60;true&#x60;, enriches response with message fees (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1InboundMessagesSidGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1InboundMessagesSidGetRequest($sid, $include_fees = null, string $contentType = self::contentTypes['v1InboundMessagesSidGet'][0])
    {

        // verify the required parameter 'sid' is set
        if ($sid === null || (is_array($sid) && count($sid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sid when calling v1InboundMessagesSidGet'
            );
        }



        $resourcePath = '/v1/InboundMessages/{sid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_fees,
            'includeFees', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($sid !== null) {
            $resourcePath = str_replace(
                '{' . 'sid' . '}',
                ObjectSerializer::toPathValue($sid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

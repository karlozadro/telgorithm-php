<?php
/**
 * OptOutsApi
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
 * OptOutsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OptOutsApi
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
        'v1OptOutsGet' => [
            'application/json',
        ],
        'v1OptOutsPost' => [
            'application/json-patch+json',
            'application/json',
            'text/json',
            'application/*+json',
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
     * Operation v1OptOutsGet
     *
     * Get all company opt outs.
     *
     * @param  string $number End-user number that opted out (optional)
     * @param  \DateTime $created_on Created date (optional)
     * @param  string $scope TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out (optional)
     * @param  int $page_size page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction order_by_direction (optional)
     * @param  string $search_id search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\OptOutModelPaginatedResult|\OpenAPI\Client\Model\ValidationProblemDetails
     */
    public function v1OptOutsGet($number = null, $created_on = null, $scope = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1OptOutsGet'][0])
    {
        list($response) = $this->v1OptOutsGetWithHttpInfo($number, $created_on, $scope, $page_size, $order_by_direction, $search_id, $contentType);
        return $response;
    }

    /**
     * Operation v1OptOutsGetWithHttpInfo
     *
     * Get all company opt outs.
     *
     * @param  string $number End-user number that opted out (optional)
     * @param  \DateTime $created_on Created date (optional)
     * @param  string $scope TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsGet'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\OptOutModelPaginatedResult|\OpenAPI\Client\Model\ValidationProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1OptOutsGetWithHttpInfo($number = null, $created_on = null, $scope = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1OptOutsGet'][0])
    {
        $request = $this->v1OptOutsGetRequest($number, $created_on, $scope, $page_size, $order_by_direction, $search_id, $contentType);

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
                    if ('\OpenAPI\Client\Model\OptOutModelPaginatedResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\OptOutModelPaginatedResult' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\OptOutModelPaginatedResult', []),
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

            $returnType = '\OpenAPI\Client\Model\OptOutModelPaginatedResult';
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
                        '\OpenAPI\Client\Model\OptOutModelPaginatedResult',
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
     * Operation v1OptOutsGetAsync
     *
     * Get all company opt outs.
     *
     * @param  string $number End-user number that opted out (optional)
     * @param  \DateTime $created_on Created date (optional)
     * @param  string $scope TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1OptOutsGetAsync($number = null, $created_on = null, $scope = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1OptOutsGet'][0])
    {
        return $this->v1OptOutsGetAsyncWithHttpInfo($number, $created_on, $scope, $page_size, $order_by_direction, $search_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1OptOutsGetAsyncWithHttpInfo
     *
     * Get all company opt outs.
     *
     * @param  string $number End-user number that opted out (optional)
     * @param  \DateTime $created_on Created date (optional)
     * @param  string $scope TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1OptOutsGetAsyncWithHttpInfo($number = null, $created_on = null, $scope = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1OptOutsGet'][0])
    {
        $returnType = '\OpenAPI\Client\Model\OptOutModelPaginatedResult';
        $request = $this->v1OptOutsGetRequest($number, $created_on, $scope, $page_size, $order_by_direction, $search_id, $contentType);

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
     * Create request for operation 'v1OptOutsGet'
     *
     * @param  string $number End-user number that opted out (optional)
     * @param  \DateTime $created_on Created date (optional)
     * @param  string $scope TollFree phone number (must start with country code e.g. +1...) or TCR Campaign Sid  to which end-user is opted out (optional)
     * @param  int $page_size (optional)
     * @param  \OpenAPI\Client\Model\OrderByDirections $order_by_direction (optional)
     * @param  string $search_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1OptOutsGetRequest($number = null, $created_on = null, $scope = null, $page_size = null, $order_by_direction = null, $search_id = null, string $contentType = self::contentTypes['v1OptOutsGet'][0])
    {



        if ($scope !== null && strlen($scope) > 128) {
            throw new \InvalidArgumentException('invalid length for "$scope" when calling OptOutsApi.v1OptOutsGet, must be smaller than or equal to 128.');
        }
        
        if ($page_size !== null && $page_size > 10000) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling OptOutsApi.v1OptOutsGet, must be smaller than or equal to 10000.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling OptOutsApi.v1OptOutsGet, must be bigger than or equal to 1.');
        }
        



        $resourcePath = '/v1/OptOuts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $number,
            'Number', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_on,
            'CreatedOn', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $scope,
            'Scope', // param base name
            'string', // openApiType
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
     * Operation v1OptOutsPost
     *
     * Create opt outs.
     *
     * @param  \OpenAPI\Client\Model\V1OptOutsPostRequest $v1_opt_outs_post_request v1_opt_outs_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\CreatedOptOutsModel|\OpenAPI\Client\Model\ValidationProblemDetails
     */
    public function v1OptOutsPost($v1_opt_outs_post_request = null, string $contentType = self::contentTypes['v1OptOutsPost'][0])
    {
        list($response) = $this->v1OptOutsPostWithHttpInfo($v1_opt_outs_post_request, $contentType);
        return $response;
    }

    /**
     * Operation v1OptOutsPostWithHttpInfo
     *
     * Create opt outs.
     *
     * @param  \OpenAPI\Client\Model\V1OptOutsPostRequest $v1_opt_outs_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\CreatedOptOutsModel|\OpenAPI\Client\Model\ValidationProblemDetails, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1OptOutsPostWithHttpInfo($v1_opt_outs_post_request = null, string $contentType = self::contentTypes['v1OptOutsPost'][0])
    {
        $request = $this->v1OptOutsPostRequest($v1_opt_outs_post_request, $contentType);

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
                    if ('\OpenAPI\Client\Model\CreatedOptOutsModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\CreatedOptOutsModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\CreatedOptOutsModel', []),
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

            $returnType = '\OpenAPI\Client\Model\CreatedOptOutsModel';
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
                        '\OpenAPI\Client\Model\CreatedOptOutsModel',
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
     * Operation v1OptOutsPostAsync
     *
     * Create opt outs.
     *
     * @param  \OpenAPI\Client\Model\V1OptOutsPostRequest $v1_opt_outs_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1OptOutsPostAsync($v1_opt_outs_post_request = null, string $contentType = self::contentTypes['v1OptOutsPost'][0])
    {
        return $this->v1OptOutsPostAsyncWithHttpInfo($v1_opt_outs_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation v1OptOutsPostAsyncWithHttpInfo
     *
     * Create opt outs.
     *
     * @param  \OpenAPI\Client\Model\V1OptOutsPostRequest $v1_opt_outs_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function v1OptOutsPostAsyncWithHttpInfo($v1_opt_outs_post_request = null, string $contentType = self::contentTypes['v1OptOutsPost'][0])
    {
        $returnType = '\OpenAPI\Client\Model\CreatedOptOutsModel';
        $request = $this->v1OptOutsPostRequest($v1_opt_outs_post_request, $contentType);

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
     * Create request for operation 'v1OptOutsPost'
     *
     * @param  \OpenAPI\Client\Model\V1OptOutsPostRequest $v1_opt_outs_post_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['v1OptOutsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function v1OptOutsPostRequest($v1_opt_outs_post_request = null, string $contentType = self::contentTypes['v1OptOutsPost'][0])
    {



        $resourcePath = '/v1/OptOuts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($v1_opt_outs_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($v1_opt_outs_post_request));
            } else {
                $httpBody = $v1_opt_outs_post_request;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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

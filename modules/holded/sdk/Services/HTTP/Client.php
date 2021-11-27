<?php

declare(strict_types=1);

namespace Holded\SDK\Services\HTTP;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Client
{
    const DEFAULT_HOLDED_URL = 'https://app.holded.com';

    /** @var string */
    public $apikey = '';

    /** @var string */
    private $holdedUrl;

    /** @var HttpClientInterface */
    private $httpClient;

    public function __construct(
        HttpClientInterface $httpClient,
        string $apikey,
        ?string $url = null
    ) {
        //$holdedUrl = getenv('HOLDED_URL');
        $this->holdedUrl = ($url) ? $url : self::DEFAULT_HOLDED_URL;

        $this->apikey = $apikey;
        $this->httpClient = $httpClient;
    }

    /**
     * @param mixed[]|\JsonSerializable $extra
     *
     * @return mixed
     */
    public function call(string $url, $extra = [], string $type = 'GET', bool $callToOldApi = false)
    {
        if ($extra instanceof \JsonSerializable) {
            $extra = json_decode(json_encode($extra) ?: '', true);
        }

        $response = [];

        if (!empty($this->apikey)) {
            $params = ['key' => $this->apikey];
            $params = array_merge($params, $extra);

            if (!$callToOldApi) {
                $args = [
                    'json'    => $params,
                    'headers' => ['Key' => $this->apikey, 'Content-Type' => 'application/json'],
                ];
            } else {
                $args = [
                    'body'    => $params,
                    'headers' => ['Key' => $this->apikey],
                ];
            }

            $args = array_merge($args, [
                // 'timeout' => '5',
                'http_version' => '1.0',
            ]);

            try {
                $url = sprintf('%s/%s', $this->holdedUrl, $url);

                $response = $this->httpClient->request(
                    $type,
                    $url,
                    $args
                );
                $statusCode = $response->getStatusCode();
                $response = $response->toArray();

                if ($statusCode >= 200 && $statusCode < 300 && empty($response)) {
                    $response = true;
                }
            } catch (\Exception $e) {
                $response = [];
            }
        }

        return $response;
    }

    /**
     * @param string                    $url
     * @param mixed[]|\JsonSerializable $extra
     *
     * @return mixed[]
     */
    public function get($url, $extra = []): array
    {
        return $this->call("api/v1$url", $extra, 'POST', true);
    }
}

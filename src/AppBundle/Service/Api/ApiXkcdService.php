<?php


namespace AppBundle\Service\Api;

use Franjid\ApiWrapperBundle\Api\Api;
use Franjid\ApiWrapperBundle\Api\ApiResponse;
use Franjid\ApiWrapperBundle\Api\ApiRequest;

class ApiXkcdService extends Api implements ApiXkcdServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getLastComic()
    {
        $route = 'info.0.json';

        /** @var ApiRequest $request */
        $request = new ApiRequest('GET', $route);

        /** @var ApiResponse $response */
        $response = $this->send($request);

        return json_decode($response->getBody(), true);
    }
}

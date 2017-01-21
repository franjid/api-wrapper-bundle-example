<?php

namespace AppBundle\Service\Api;

use Franjid\ApiWrapperBundle\Api\ApiInterface;

interface ApiXkcdServiceInterface extends ApiInterface
{
    const DIC_NAME = 'Service.Api.ApiXkcdServiceInterface';

    /**
     * @return array
     */
    public function getLastComic();
}

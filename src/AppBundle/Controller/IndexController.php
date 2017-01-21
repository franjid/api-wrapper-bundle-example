<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Service\Api\ApiXkcdServiceInterface;

class IndexController extends Controller
{
    public function indexAction()
    {
        /** @var ApiXkcdServiceInterface $apiXkcd */
        $apiXkcd = $this->get(ApiXkcdServiceInterface::DIC_NAME);

        return $this->render(
            'index/index.html.twig',
            ['comic' => $apiXkcd->getLastComic()]
        );
    }
}

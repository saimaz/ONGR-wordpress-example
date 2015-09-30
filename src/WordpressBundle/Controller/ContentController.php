<?php

namespace WordpressBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{
    /**
     * @param $document
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function documentAction($document)
    {
        return $this->render(
            'WordpressBundle:Content:document.html.twig',
            [
                'content' => $document,
            ]
        );
    }
}

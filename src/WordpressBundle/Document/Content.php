<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WordpressBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;
use ONGR\ElasticsearchBundle\Document\AbstractDocument;
use ONGR\RouterBundle\Document\SeoAwareTrait;

/**
 * Holds content page data.
 *
 * @ES\Document(type="content")
 */
class Content extends AbstractDocument
{
    // Put here type modifications if needed.

    use SeoAwareTrait;

    /**
     * @var string
     *
     * @ES\Property(type="string", name="title")
     */
    public $title;

    /**
     * @var string
     *
     * @ES\Property(type="string", name="content")
     */
    public $content;
}

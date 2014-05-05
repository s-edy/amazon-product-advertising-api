<?php
/**
 * Request
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request;

use Sedy\PAApi\Request\Url\UrlInterface;

/**
 * Request
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Request implements RequestInterface
{
    /**
     * @var UrlInterface
     */
    private $url;

    /**
     * @param UrlInterface $url
     */
    public function __construct(UrlInterface $url)
    {
        $this->url = $url;
    }
}

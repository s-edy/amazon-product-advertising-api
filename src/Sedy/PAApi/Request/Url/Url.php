<?php
/**
 * Url
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Url;

use Sedy\PAApi\Request\Endpoint\EndpointInterface;
use Sedy\PAApi\Request\Url\Parameter\ParameterCollectionInterface;

/**
 * Url
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Url implements UrlInterface
{
    /**
     * @var EndpointInterface
     */
    private $endpoint;

    /**
     * @var ParameterCollectionInterface
     */
    private $parameterCollection;

    /**
     * @param EndpointInterface            $endpoint
     * @param ParameterCollectionInterface $parameters
     */
    public function __construct($endpoint, $parameters)
    {
        $this->endpoint            = $endpoint;
        $this->parameterCollection = $parameters;
    }
}

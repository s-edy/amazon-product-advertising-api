<?php
/**
 * Endpoint
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Endpoint;

/**
 * Endpoint
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Endpoint implements EndpointInterface
{
    /**
     * @var string
     */
    private $endpoint;

    /**
     * @param string $endpoint
     */
    public function __construct($endpoint)
    {
        $this->assertString($endpoint);
        $this->assertCorrectUrl($endpoint);

        $this->endpoint = $endpoint;
    }

    /**
     * @param mixed $endpoint
     *
     * @return void
     * @throws InvalidEndpointException
     */
    private function assertString($endpoint)
    {
        if (is_string($endpoint)) {
            return;
        }
        throw new InvalidEndpointException(
            sprintf('Not string. endpoint=[%s]', gettype($endpoint))
        );
    }

    /**
     * @param string $endpoint
     *
     * @return void
     * @throws InvalidEndpointException
     */
    private function assertCorrectUrl($endpoint)
    {
        if (parse_url($endpoint) !== false) {
            return;
        }
        throw new InvalidEndpointException($endpoint);
    }
}

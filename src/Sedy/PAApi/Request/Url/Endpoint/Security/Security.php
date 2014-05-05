<?php
/**
 * Security
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Url\Endpoint\Security;

/**
 * Security
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Security implements SecurityInterface
{
    /**
     * @var boolean
     */
    private $isSecure;

    /**
     * @param boolean $isSecure
     *
     * @throws InvalidSecurityException
     */
    public function __construct($isSecure)
    {
        $this->assertIsSecure($isSecure);

        $this->isSecure = $isSecure;
    }

    /**
     * @return SecurityInterface
     */
    public function secure()
    {
        return new self(true);
    }

    /**
     * @return SecurityInterface
     */
    public function insecure()
    {
        return new self(false);
    }

    /**
     * @param mixed $isSecure
     *
     * @return void
     * @throws InvalidSecurityException
     */
    private function assertIsSecure($isSecure)
    {
        if (is_bool($isSecure)) {
            return;
        }

        throw new InvalidSecurityException(gettype($isSecure));
    }
}

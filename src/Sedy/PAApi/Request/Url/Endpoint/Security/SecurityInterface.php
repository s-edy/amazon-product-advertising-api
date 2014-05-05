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
interface SecurityInterface
{
    /**
     * @return SecurityInterface
     */
    public function secure();

    /**
     * @return SecurityInterface
     */
    public function insecure();
}

<?php
/**
 * Configuration
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Configuration;

use Sedy\PAApi\Configuration\Identifier\IdentifierInterface;
use Sedy\PAApi\Configuration\Signature\SecretAccessKeyInterface;

/**
 * Configuration
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @var IdentifierInterface
     */
    private $identifier;

    /**
     * @var SecretAccessKeyInterface
     */
    private $secretAccessKey;

    /**
     * @param IdentifierInterface      $identifier
     * @param SecretAccessKeyInterface $secretAccessKey
     */
    public function __construct(
        IdentifierInterface $identifier,
        SecretAccessKeyInterface $secretAccessKey
    ) {
        $this->secretAccessKey = $secretAccessKey;
        $this->identifier      = $identifier;
    }
}

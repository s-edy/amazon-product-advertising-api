<?php
/**
 * SecretAccessKey
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Configuration\SecretAccessKey;

/**
 * SecretAccessKey
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class SecretAccessKey implements SecretAccessKeyInterface
{
    /**
     * @var string
     */
    private $secretAccessKey;

    /**
     * @param $secretAccessKey
     *
     * @throws InvalidSecretAccessKeyException
     */
    public function __construct($secretAccessKey)
    {
        $this->assertString($secretAccessKey);

        $this->secretAccessKey = $secretAccessKey;
    }

    /**
     * @param $secretAccessKey
     *
     * @throws InvalidSecretAccessKeyException
     * @return void
     */
    private function assertString($secretAccessKey)
    {
        if (is_string($secretAccessKey)) {
            return;
        }
        throw new InvalidSecretAccessKeyException(gettype($secretAccessKey));
    }
}

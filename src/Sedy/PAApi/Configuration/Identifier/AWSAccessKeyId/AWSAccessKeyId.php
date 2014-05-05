<?php
/**
 * AWSAccessKeyId
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Configuration\Identifier\AWSAccessKeyId;

/**
 * AWSAccessKeyId
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class AWSAccessKeyId implements AWSAccessKeyIdInterface
{
    /**
     * @var string
     */
    private $awsAccessKeyId;

    /**
     * @param string $accessKeyId
     */
    public function __construct($accessKeyId)
    {
        $this->assertString($accessKeyId);

        $this->awsAccessKeyId = $accessKeyId;
    }

    /**
     * @param mixed $accessKeyId
     *
     * @return void
     * @throws InvalidAWSAccessKeyIdException
     */
    private function assertString($accessKeyId)
    {
        if (is_string($accessKeyId)) {
            return;
        }
        throw new InvalidAWSAccessKeyIdException(gettype($accessKeyId));
    }
}

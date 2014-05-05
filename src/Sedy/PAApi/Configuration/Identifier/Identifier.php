<?php
/**
 * Identifier
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Configuration\Identifier;

use Sedy\PAApi\Configuration\Identifier\AssociateTag\AssociateTagInterface;
use Sedy\PAApi\Configuration\Identifier\AWSAccessKeyId\AWSAccessKeyIdInterface;

/**
 * Identifier
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Identifier implements IdentifierInterface
{
    /**
     * @var AWSAccessKeyIdInterface
     */
    private $awsAccessKeyId;

    /**
     * @var AssociateTagInterface
     */
    private $associateTag;

    /**
     * @param AWSAccessKeyIdInterface $awsAccessKeyId
     * @param AssociateTagInterface   $associateTag
     */
    public function __construct(
        AWSAccessKeyIdInterface $awsAccessKeyId,
        AssociateTagInterface $associateTag = null
    ) {
        $this->awsAccessKeyId = $awsAccessKeyId;
        $this->associateTag   = $associateTag;
    }
}

<?php
/**
 * AssociateTag
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Configuration\Identifier\AssociateTag;

/**
 * AssociateTag
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class AssociateTag implements AssociateTagInterface
{
    /**
     * @var string
     */
    private $associateTag;

    /**
     * @param $associateTag
     */
    public function __construct($associateTag)
    {
        $this->assertString($associateTag);

        $this->associateTag = $associateTag;
    }

    /**
     * @param $associateTag
     *
     * @return void
     * @throws InvalidAssociateTagException
     */
    private function assertString($associateTag)
    {
        if (is_string($associateTag)) {
            return;
        }
        throw new InvalidAssociateTagException(gettype($associateTag));
    }
}

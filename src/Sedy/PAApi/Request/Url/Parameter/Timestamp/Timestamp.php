<?php
/**
 * Timestamp
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Url\Parameter\Timestamp;

use DateTime;

/**
 * Timestamp
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Timestamp implements TimestampInterface
{
    /**
     * @var DateTime
     */
    private $datetime;

    /**
     * @param DateTime $datetime
     */
    public function __construct(DateTime $datetime)
    {
        $this->datetime = $datetime;
    }
}

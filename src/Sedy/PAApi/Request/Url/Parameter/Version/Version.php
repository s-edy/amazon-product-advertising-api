<?php
/**
 * Version
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Url\Parameter\Version;

/**
 * Version
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Version implements VersionInterface
{
    /**
     * @var string
     */
    private $version;

    /**
     * @param $version
     *
     * @throws InvalidVersionException
     */
    public function __construct($version)
    {
        $this->assertString($version);
        $this->assertVersion($version);

        $this->version = $version;
    }

    /**
     * @param $version
     *
     * @return void
     * @throws InvalidVersionException
     */
    private function assertString($version)
    {
        if (is_string($version)) {
            return;
        }
        throw new InvalidVersionException(gettype($version));
    }

    /**
     * @param $version
     *
     * @return void
     * @throws InvalidVersionException
     */
    private function assertVersion($version)
    {
        if (preg_match('\d{4}-\d{2}-\d{2}', $version) !== 1) {
            return;
        }
        throw new InvalidVersionException($version);
    }
}

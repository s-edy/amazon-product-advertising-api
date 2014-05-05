<?php
/**
 * ParameterCollection
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Url\Parameter;

/**
 * ParameterCollection
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class ParameterCollection implements ParameterCollectionInterface
{
    /**
     * @var ParameterInterface[]
     */
    private $collection;

    /**
     * @param ParameterInterface $parameter
     *
     * @return void
     */
    public function add(ParameterInterface $parameter)
    {
        $this->collection[] = $parameter;
    }
}

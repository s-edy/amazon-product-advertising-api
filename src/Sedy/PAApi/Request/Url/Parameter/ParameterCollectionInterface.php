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
interface ParameterCollectionInterface
{
    /**
     * @param ParameterInterface $parameter
     *
     * @return void
     */
    public function add(ParameterInterface $parameter);
}

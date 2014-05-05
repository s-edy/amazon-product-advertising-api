<?php
/**
 * Country
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
namespace Sedy\PAApi\Request\Url\Endpoint\Country;

/**
 * Country
 *
 * @author Shinichiro Yuki <sinycourage@gmail.com>
 */
class Country implements CountryInterface
{
    /**
     * @var string
     */
    private $country;

    /**
     * @param string $country
     */
    public function __construct($country)
    {
        $this->assertCountry($country);

        $this->country = $country;
    }

    /**
     * @return string[]
     */
    private function getExpects()
    {
        return [
            'CA',
            'DE',
            'FR',
            'JP',
            'UK',
            'US',
        ];
    }

    /**
     * @param mixed $country
     *
     * @return void
     * @throws InvalidCountryException
     */
    private function assertCountry($country)
    {
        if (in_array($country, $this->getExpects())) {
            return;
        }

        throw new InvalidCountryException($country);
    }
}

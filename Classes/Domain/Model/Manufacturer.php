<?php
namespace Envauto\CarData\Domain\Model;

/***
 *
 * This file is part of the "CarData" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Manufacturer
 */
class Manufacturer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * country
     *
     * @var string
     */
    protected $country = '';

    /**
     * companyInfo
     *
     * @var string
     */
    protected $companyInfo = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the country
     *
     * @return string $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     *
     * @param string $country
     * @return void
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Returns the companyInfo
     *
     * @return string $companyInfo
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets the companyInfo
     *
     * @param string $companyInfo
     * @return void
     */
    public function setCompanyInfo($companyInfo)
    {
        $this->companyInfo = $companyInfo;
    }
}

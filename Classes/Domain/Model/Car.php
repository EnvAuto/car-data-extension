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
 * Car
 */
class Car extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * manufacturer
     *
     * @var string
     */
    protected $manufacturer = '';

    /**
     * model
     *
     * @var string
     */
    protected $model = '';

    /**
     * year
     *
     * @var int
     */
    protected $year = 0;

    /**
     * class
     *
     * @var string
     */
    protected $class = '';

    /**
     * fuelType
     *
     * @var string
     */
    protected $fuelType = '';

    /**
     * savings
     *
     * @var float
     */
    protected $savings = 0.0;

    /**
     * cylinders
     *
     * @var int
     */
    protected $cylinders = 0;

    /**
     * cityMPG
     *
     * @var float
     */
    protected $cityMPG = 0.0;

    /**
     * highwayMPG
     *
     * @var float
     */
    protected $highwayMPG = 0.0;

    /**
     * combinedMPG
     *
     * @var float
     */
    protected $combinedMPG = 0.0;

    /**
     * fuelCost
     *
     * @var float
     */
    protected $fuelCost = 0.0;

    /**
     * Returns the manufacturer
     *
     * @return string $manufacturer
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets the manufacturer
     *
     * @param string $manufacturer
     * @return void
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Returns the model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     *
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Returns the year
     *
     * @return int $year
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets the year
     *
     * @param int $year
     * @return void
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Returns the class
     *
     * @return string $class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets the class
     *
     * @param string $class
     * @return void
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Returns the fuelType
     *
     * @return string $fuelType
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Sets the fuelType
     *
     * @param string $fuelType
     * @return void
     */
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
    }

    /**
     * Returns the savings
     *
     * @return float $savings
     */
    public function getSavings()
    {
        return $this->savings;
    }

    /**
     * Sets the savings
     *
     * @param float $savings
     * @return void
     */
    public function setSavings($savings)
    {
        $this->savings = $savings;
    }

    /**
     * Returns the cylinders
     *
     * @return int $cylinders
     */
    public function getCylinders()
    {
        return $this->cylinders;
    }

    /**
     * Sets the cylinders
     *
     * @param int $cylinders
     * @return void
     */
    public function setCylinders($cylinders)
    {
        $this->cylinders = $cylinders;
    }

    /**
     * Returns the cityMPG
     *
     * @return float $cityMPG
     */
    public function getCityMPG()
    {
        return $this->cityMPG;
    }

    /**
     * Sets the cityMPG
     *
     * @param float $cityMPG
     * @return void
     */
    public function setCityMPG($cityMPG)
    {
        $this->cityMPG = $cityMPG;
    }

    /**
     * Returns the highwayMPG
     *
     * @return float $highwayMPG
     */
    public function getHighwayMPG()
    {
        return $this->highwayMPG;
    }

    /**
     * Sets the highwayMPG
     *
     * @param float $highwayMPG
     * @return void
     */
    public function setHighwayMPG($highwayMPG)
    {
        $this->highwayMPG = $highwayMPG;
    }

    /**
     * Returns the combinedMPG
     *
     * @return float $combinedMPG
     */
    public function getCombinedMPG()
    {
        return $this->combinedMPG;
    }

    /**
     * Sets the combinedMPG
     *
     * @param float $combinedMPG
     * @return void
     */
    public function setCombinedMPG($combinedMPG)
    {
        $this->combinedMPG = $combinedMPG;
    }

    /**
     * Returns the fuelCost
     *
     * @return float $fuelCost
     */
    public function getFuelCost()
    {
        return $this->fuelCost;
    }

    /**
     * Sets the fuelCost
     *
     * @param float $fuelCost
     * @return void
     */
    public function setFuelCost($fuelCost)
    {
        $this->fuelCost = $fuelCost;
    }
}

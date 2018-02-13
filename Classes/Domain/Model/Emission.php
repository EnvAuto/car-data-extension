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
 * Emission
 */
class Emission extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * car
     *
     * @var string
     */
    protected $car = '';

    /**
     * saleArea
     *
     * @var int
     */
    protected $saleArea = 0;

    /**
     * score
     *
     * @var int
     */
    protected $score = 0;

    /**
     * cogpm
     *
     * @var float
     */
    protected $cogpm = 0.0;

    /**
     * Returns the car
     *
     * @return string $car
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Sets the car
     *
     * @param string $car
     * @return void
     */
    public function setCar($car)
    {
        $this->car = $car;
    }

    /**
     * Returns the saleArea
     *
     * @return int $saleArea
     */
    public function getSaleArea()
    {
        return $this->saleArea;
    }

    /**
     * Sets the saleArea
     *
     * @param int $saleArea
     * @return void
     */
    public function setSaleArea($saleArea)
    {
        $this->saleArea = $saleArea;
    }

    /**
     * Returns the score
     *
     * @return int $score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets the score
     *
     * @param int $score
     * @return void
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * Returns the cogpm
     *
     * @return float $cogpm
     */
    public function getCogpm()
    {
        return $this->cogpm;
    }

    /**
     * Sets the cogpm
     *
     * @param float $cogpm
     * @return void
     */
    public function setCogpm($cogpm)
    {
        $this->cogpm = $cogpm;
    }
}

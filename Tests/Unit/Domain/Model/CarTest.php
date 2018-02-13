<?php
namespace Envauto\CarData\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class CarTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarData\Domain\Model\Car
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Envauto\CarData\Domain\Model\Car();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getManufacturerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getManufacturer()
        );
    }

    /**
     * @test
     */
    public function setManufacturerForStringSetsManufacturer()
    {
        $this->subject->setManufacturer('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'manufacturer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getYearReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getYear()
        );
    }

    /**
     * @test
     */
    public function setYearForIntSetsYear()
    {
        $this->subject->setYear(12);

        self::assertAttributeEquals(
            12,
            'year',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getClassReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getClass()
        );
    }

    /**
     * @test
     */
    public function setClassForStringSetsClass()
    {
        $this->subject->setClass('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'class',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFuelTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFuelType()
        );
    }

    /**
     * @test
     */
    public function setFuelTypeForStringSetsFuelType()
    {
        $this->subject->setFuelType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fuelType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSavingsReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getSavings()
        );
    }

    /**
     * @test
     */
    public function setSavingsForFloatSetsSavings()
    {
        $this->subject->setSavings(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'savings',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getCylindersReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCylinders()
        );
    }

    /**
     * @test
     */
    public function setCylindersForIntSetsCylinders()
    {
        $this->subject->setCylinders(12);

        self::assertAttributeEquals(
            12,
            'cylinders',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCityMPGReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getCityMPG()
        );
    }

    /**
     * @test
     */
    public function setCityMPGForFloatSetsCityMPG()
    {
        $this->subject->setCityMPG(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'cityMPG',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getHighwayMPGReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getHighwayMPG()
        );
    }

    /**
     * @test
     */
    public function setHighwayMPGForFloatSetsHighwayMPG()
    {
        $this->subject->setHighwayMPG(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'highwayMPG',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getCombinedMPGReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getCombinedMPG()
        );
    }

    /**
     * @test
     */
    public function setCombinedMPGForFloatSetsCombinedMPG()
    {
        $this->subject->setCombinedMPG(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'combinedMPG',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getFuelCostReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getFuelCost()
        );
    }

    /**
     * @test
     */
    public function setFuelCostForFloatSetsFuelCost()
    {
        $this->subject->setFuelCost(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'fuelCost',
            $this->subject,
            '',
            0.000000001
        );
    }
}

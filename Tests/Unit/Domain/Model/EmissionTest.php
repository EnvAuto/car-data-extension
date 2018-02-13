<?php
namespace Envauto\CarData\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class EmissionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarData\Domain\Model\Emission
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Envauto\CarData\Domain\Model\Emission();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getCarReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCar()
        );
    }

    /**
     * @test
     */
    public function setCarForStringSetsCar()
    {
        $this->subject->setCar('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'car',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSaleAreaReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getSaleArea()
        );
    }

    /**
     * @test
     */
    public function setSaleAreaForIntSetsSaleArea()
    {
        $this->subject->setSaleArea(12);

        self::assertAttributeEquals(
            12,
            'saleArea',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getScoreReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getScore()
        );
    }

    /**
     * @test
     */
    public function setScoreForIntSetsScore()
    {
        $this->subject->setScore(12);

        self::assertAttributeEquals(
            12,
            'score',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCogpmReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getCogpm()
        );
    }

    /**
     * @test
     */
    public function setCogpmForFloatSetsCogpm()
    {
        $this->subject->setCogpm(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'cogpm',
            $this->subject,
            '',
            0.000000001
        );
    }
}

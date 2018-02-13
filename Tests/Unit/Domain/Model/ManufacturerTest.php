<?php
namespace Envauto\CarData\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ManufacturerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarData\Domain\Model\Manufacturer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Envauto\CarData\Domain\Model\Manufacturer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCountryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCountry()
        );
    }

    /**
     * @test
     */
    public function setCountryForStringSetsCountry()
    {
        $this->subject->setCountry('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'country',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCompanyInfoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompanyInfo()
        );
    }

    /**
     * @test
     */
    public function setCompanyInfoForStringSetsCompanyInfo()
    {
        $this->subject->setCompanyInfo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'companyInfo',
            $this->subject
        );
    }
}

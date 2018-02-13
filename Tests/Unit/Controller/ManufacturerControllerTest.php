<?php
namespace Envauto\CarData\Tests\Unit\Controller;

/**
 * Test case.
 */
class ManufacturerControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarData\Controller\ManufacturerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Envauto\CarData\Controller\ManufacturerController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllManufacturersFromRepositoryAndAssignsThemToView()
    {

        $allManufacturers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $manufacturerRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\ManufacturerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $manufacturerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allManufacturers));
        $this->inject($this->subject, 'manufacturerRepository', $manufacturerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('manufacturers', $allManufacturers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenManufacturerToView()
    {
        $manufacturer = new \Envauto\CarData\Domain\Model\Manufacturer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('manufacturer', $manufacturer);

        $this->subject->showAction($manufacturer);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenManufacturerToManufacturerRepository()
    {
        $manufacturer = new \Envauto\CarData\Domain\Model\Manufacturer();

        $manufacturerRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\ManufacturerRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $manufacturerRepository->expects(self::once())->method('add')->with($manufacturer);
        $this->inject($this->subject, 'manufacturerRepository', $manufacturerRepository);

        $this->subject->createAction($manufacturer);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenManufacturerToView()
    {
        $manufacturer = new \Envauto\CarData\Domain\Model\Manufacturer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('manufacturer', $manufacturer);

        $this->subject->editAction($manufacturer);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenManufacturerInManufacturerRepository()
    {
        $manufacturer = new \Envauto\CarData\Domain\Model\Manufacturer();

        $manufacturerRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\ManufacturerRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $manufacturerRepository->expects(self::once())->method('update')->with($manufacturer);
        $this->inject($this->subject, 'manufacturerRepository', $manufacturerRepository);

        $this->subject->updateAction($manufacturer);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenManufacturerFromManufacturerRepository()
    {
        $manufacturer = new \Envauto\CarData\Domain\Model\Manufacturer();

        $manufacturerRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\ManufacturerRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $manufacturerRepository->expects(self::once())->method('remove')->with($manufacturer);
        $this->inject($this->subject, 'manufacturerRepository', $manufacturerRepository);

        $this->subject->deleteAction($manufacturer);
    }
}

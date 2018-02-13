<?php
namespace Envauto\CarData\Tests\Unit\Controller;

/**
 * Test case.
 */
class EmissionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Envauto\CarData\Controller\EmissionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Envauto\CarData\Controller\EmissionController::class)
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
    public function listActionFetchesAllEmissionsFromRepositoryAndAssignsThemToView()
    {

        $allEmissions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $emissionRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\EmissionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $emissionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEmissions));
        $this->inject($this->subject, 'emissionRepository', $emissionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('emissions', $allEmissions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEmissionToView()
    {
        $emission = new \Envauto\CarData\Domain\Model\Emission();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('emission', $emission);

        $this->subject->showAction($emission);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenEmissionToEmissionRepository()
    {
        $emission = new \Envauto\CarData\Domain\Model\Emission();

        $emissionRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\EmissionRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $emissionRepository->expects(self::once())->method('add')->with($emission);
        $this->inject($this->subject, 'emissionRepository', $emissionRepository);

        $this->subject->createAction($emission);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenEmissionToView()
    {
        $emission = new \Envauto\CarData\Domain\Model\Emission();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('emission', $emission);

        $this->subject->editAction($emission);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenEmissionInEmissionRepository()
    {
        $emission = new \Envauto\CarData\Domain\Model\Emission();

        $emissionRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\EmissionRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $emissionRepository->expects(self::once())->method('update')->with($emission);
        $this->inject($this->subject, 'emissionRepository', $emissionRepository);

        $this->subject->updateAction($emission);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenEmissionFromEmissionRepository()
    {
        $emission = new \Envauto\CarData\Domain\Model\Emission();

        $emissionRepository = $this->getMockBuilder(\Envauto\CarData\Domain\Repository\EmissionRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $emissionRepository->expects(self::once())->method('remove')->with($emission);
        $this->inject($this->subject, 'emissionRepository', $emissionRepository);

        $this->subject->deleteAction($emission);
    }
}

<?php
namespace Envauto\CarData\Controller;

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
 * ManufacturerController
 */
class ManufacturerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * manufacturerRepository
     *
     * @var \Envauto\CarData\Domain\Repository\ManufacturerRepository
     * @inject
     */
    protected $manufacturerRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $manufacturers = $this->manufacturerRepository->findAll();
        $this->view->assign('manufacturers', $manufacturers);
    }

    /**
     * action show
     *
     * @param \Envauto\CarData\Domain\Model\Manufacturer $manufacturer
     * @return void
     */
    public function showAction(\Envauto\CarData\Domain\Model\Manufacturer $manufacturer)
    {
        $this->view->assign('manufacturer', $manufacturer);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Envauto\CarData\Domain\Model\Manufacturer $newManufacturer
     * @return void
     */
    public function createAction(\Envauto\CarData\Domain\Model\Manufacturer $newManufacturer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->manufacturerRepository->add($newManufacturer);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Envauto\CarData\Domain\Model\Manufacturer $manufacturer
     * @ignorevalidation $manufacturer
     * @return void
     */
    public function editAction(\Envauto\CarData\Domain\Model\Manufacturer $manufacturer)
    {
        $this->view->assign('manufacturer', $manufacturer);
    }

    /**
     * action update
     *
     * @param \Envauto\CarData\Domain\Model\Manufacturer $manufacturer
     * @return void
     */
    public function updateAction(\Envauto\CarData\Domain\Model\Manufacturer $manufacturer)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->manufacturerRepository->update($manufacturer);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Envauto\CarData\Domain\Model\Manufacturer $manufacturer
     * @return void
     */
    public function deleteAction(\Envauto\CarData\Domain\Model\Manufacturer $manufacturer)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->manufacturerRepository->remove($manufacturer);
        $this->redirect('list');
    }
}

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
 * EmissionController
 */
class EmissionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * emissionRepository
     *
     * @var \Envauto\CarData\Domain\Repository\EmissionRepository
     * @inject
     */
    protected $emissionRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $emissions = $this->emissionRepository->findAll();
        $this->view->assign('emissions', $emissions);
    }

    /**
     * action show
     *
     * @param \Envauto\CarData\Domain\Model\Emission $emission
     * @return void
     */
    public function showAction(\Envauto\CarData\Domain\Model\Emission $emission)
    {
        $this->view->assign('emission', $emission);
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
     * @param \Envauto\CarData\Domain\Model\Emission $newEmission
     * @return void
     */
    public function createAction(\Envauto\CarData\Domain\Model\Emission $newEmission)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->emissionRepository->add($newEmission);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Envauto\CarData\Domain\Model\Emission $emission
     * @ignorevalidation $emission
     * @return void
     */
    public function editAction(\Envauto\CarData\Domain\Model\Emission $emission)
    {
        $this->view->assign('emission', $emission);
    }

    /**
     * action update
     *
     * @param \Envauto\CarData\Domain\Model\Emission $emission
     * @return void
     */
    public function updateAction(\Envauto\CarData\Domain\Model\Emission $emission)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->emissionRepository->update($emission);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Envauto\CarData\Domain\Model\Emission $emission
     * @return void
     */
    public function deleteAction(\Envauto\CarData\Domain\Model\Emission $emission)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->emissionRepository->remove($emission);
        $this->redirect('list');
    }
}

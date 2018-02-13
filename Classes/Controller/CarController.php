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
 * CarController
 */
class CarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * carRepository
     *
     * @var \Envauto\CarData\Domain\Repository\CarRepository
     * @inject
     */
    protected $carRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $cars = $this->carRepository->findAll();
        $this->view->assign('cars', $cars);
    }

    /**
     * action show
     *
     * @param \Envauto\CarData\Domain\Model\Car $car
     * @return void
     */
    public function showAction(\Envauto\CarData\Domain\Model\Car $car)
    {
        $this->view->assign('car', $car);
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
     * @param \Envauto\CarData\Domain\Model\Car $newCar
     * @return void
     */
    public function createAction(\Envauto\CarData\Domain\Model\Car $newCar)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carRepository->add($newCar);
    }

    /**
     * action edit
     *
     * @param \Envauto\CarData\Domain\Model\Car $car
     * @ignorevalidation $car
     * @return void
     */
    public function editAction(\Envauto\CarData\Domain\Model\Car $car)
    {
        $this->view->assign('car', $car);
        $this->redirect('list');
    }

    /**
     * action update
     *
     * @param \Envauto\CarData\Domain\Model\Car $car
     * @return void
     */
    public function updateAction(\Envauto\CarData\Domain\Model\Car $car)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carRepository->update($car);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Envauto\CarData\Domain\Model\Car $car
     * @return void
     */
    public function deleteAction(\Envauto\CarData\Domain\Model\Car $car)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carRepository->remove($car);
        $this->redirect('list');
    }
}

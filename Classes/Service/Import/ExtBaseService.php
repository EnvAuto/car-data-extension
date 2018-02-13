<?php
/**
 * Created by PhpStorm.
 * User: isirotkin
 * Date: 2/13/18
 * Time: 16:24
 */

namespace EBT\ExtensionBuilder\Service\Import;

use EnvAuto\CarData\Domain\Model\Car;
use EnvAuto\CarData\Domain\Model\Manufacturer;
use EnvAuto\CarData\Domain\Model\Emission;

use EnvAuto\CarData\Domain\Repository\CarRepository;
use EnvAuto\CarData\Domain\Repository\EmissionRepository;
use EnvAuto\CarData\Domain\Repository\ManufacturerRepository;

use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

class ExtbaseService
{
    /**
     * @var ObjectManager
     */
    private $objectManager;
    /**
     * @var CarRepository
     */
    private $carRepository;
    /**
     * @var EmissionRepository
     */
    private $emissionRepository;

    /**
     * @var ManufacturerRepository
     */
    private $manufacturerRepository;

    /**
     * @var PersistenceManager
     */
    private $persistenceManager;
    /**
     * @var Manufacturer[]
     */
    private $manufacturer = [];
    /**
     * @var int
     */
    private $page;

    public function __construct(int $page)
    {
        $this->page = $page;
    }
    /**
     * @param ObjectManager $objectManager
     */
    public function injectObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @param CarRepository $carRepository
     */
    public function injectCarRepository(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * @param ManufacturerRepository $manufacturerRepository
     */
    public function injectManufacturerRepository(ManufacturerRepository $manufacturerRepository)
    {
        $this->manufacturerRepository = $manufacturerRepository;
    }

    /**
     * @param EmissionRepository $emissionRepository
     */
    public function injectEmissionRepository(EmissionRepository $emissionRepository)
    {
        $this->emissionRepository = $emissionRepository;
    }


    /**
     * @param PersistenceManager $persistenceManager
     */
    public function injectPersistenceManager(PersistenceManager $persistenceManager)
    {
        $this->persistenceManager = $persistenceManager;
    }

    public function import(array $data)
    {
        foreach ($data as $item) {
            $manufacturer = $this->provideManufacturer($item['manufacturer']);

            /** @var Car $car */
            $car = $this->objectManager->get(Car::class);

            $car->setModel($item['model']);
            $car->setYear($item['year']);
            $car->setClass($item['class']);
            $car->setFuelType($item['fuelType']);
            $car->setManufacturer($manufacturer);
            $car->setSavings($item['savings']);
            $car->setCylinders($item['cylinders']);
            $car->setCityMPG($item['cityMPG']);
            $car->setHighwayMPG($item['highwayMPG']);
            $car->setCombinedMPG($item['combinedMPG']);
            $car->setFuelCost($item['fuelCost']);



            $this->carRepository->add($car);
        }
        $this->persistenceManager->persistAll();
    }

    private function provideManufacturer(string $name): Manufacturer
    {
        if (isset($this->manufacturer[$name])) {
            return $this->manufacturer[$name];
        }

        $manufacturer = $this->manufacturerRepository->findByName($name);
        if ($manufacturer === null) {
            /** @var Manufacturer $manufacturer */
            $manufacturer = $this->objectManager->get(Brand::class);
            $manufacturer->setName($name);

        }
        $this->manufactureru[$name] = $manufacturer;
        return $manufacturer;
    }


}


?>
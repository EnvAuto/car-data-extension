<?php
/**
 * Created by PhpStorm.
 * User: isirotkin
 * Date: 2/13/18
 * Time: 17:02
 */


namespace EBT\ExtensionBuilder\Control;
use  EBT\ExtensionBuilder\Service\Import\ExtbaseService;
use  EBT\ExtensionBuilder\Service\Import\CsvReader;
use TYPO3\CMS\Extbase\Mvc\Controller\CommandController;



class ExtbaseCommandController extends CommandController
{
    /**
     * @var CsvReader
     */
    private $reader;
    /**
     * @param CsvReader $reader
     */
    public function injectReader(CsvReader $reader)
    {
        $this->reader = $reader;
    }
    /**
     * Imports CSV data using TYPO3 Extbase
     *
     * Imports CSV data using TYPO3 Extbase
     *
     * @param string $file CSV File name to be imported
     * @param int $page Target page id
     */
    public function importCommand(string $file, int $page)
    {
        $this->verifyFile($file);
        $consumption = new ConsumptionService();
        $consumption->start();
        $this->createExtbaseService($page)->import(
            $this->reader->read($file)
        );
        $consumption->stop();
        foreach ($consumption->getDifference() as $aspect => $value) {
            $this->output->outputLine(
                sprintf('Consumption "%s": %.02f', $aspect, $value)
            );
        }
    }
    /**
     * @param string $file
     */
    private function verifyFile(string $file)
    {
        if (!file_exists($file)) {
            throw new \RuntimeException(
                sprintf('File "%s" not found', $file),
                1512417926
            );
        }
        $fileInfo = new \finfo();
        $mimeType = $fileInfo->file($file, FILEINFO_MIME_TYPE);
        if (!empty($mimeType) && $mimeType !== 'text/csv' && $mimeType !== 'text/plain') {
            throw new \RuntimeException(
                sprintf('Expected "text/csv", got "%s" mime-type', $mimeType),
                1512417927
            );
        }
    }
    /**
     * @param int $page
     * @return object|ExtbaseService
     */
    private function createExtbaseService(int $page): ExtbaseService
    {
        return $this->objectManager->get(ExtbaseService::class, $page);
    }
}

?>
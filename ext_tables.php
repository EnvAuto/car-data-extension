<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Envauto.CarData',
            'Cardataplugin',
            'CarDataPluing'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Envauto.CarData',
            'Cardatapluginnew',
            'CarDataPluing_new'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('car_data', 'Configuration/TypoScript', 'CarData');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardata_domain_model_manufacturer', 'EXT:car_data/Resources/Private/Language/locallang_csh_tx_cardata_domain_model_manufacturer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardata_domain_model_manufacturer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardata_domain_model_car', 'EXT:car_data/Resources/Private/Language/locallang_csh_tx_cardata_domain_model_car.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardata_domain_model_car');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardata_domain_model_emission', 'EXT:car_data/Resources/Private/Language/locallang_csh_tx_cardata_domain_model_emission.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardata_domain_model_emission');

    }
);

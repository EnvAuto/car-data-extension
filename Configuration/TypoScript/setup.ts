
plugin.tx_cardata_cardataplugin {
    view {
        templateRootPaths.0 = EXT:car_data/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_cardata_cardataplugin.view.templateRootPath}
        partialRootPaths.0 = EXT:car_data/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_cardata_cardataplugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:car_data/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_cardata_cardataplugin.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_cardata_cardataplugin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_cardata_cardatapluginnew {
    view {
        templateRootPaths.0 = EXT:car_data/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_cardata_cardatapluginnew.view.templateRootPath}
        partialRootPaths.0 = EXT:car_data/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_cardata_cardatapluginnew.view.partialRootPath}
        layoutRootPaths.0 = EXT:car_data/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_cardata_cardatapluginnew.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_cardata_cardatapluginnew.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_cardata._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-car-data table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-car-data table th {
        font-weight:bold;
    }

    .tx-car-data table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

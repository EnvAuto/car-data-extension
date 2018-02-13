
plugin.tx_cardata_cardataplugin {
    view {
        # cat=plugin.tx_cardata_cardataplugin/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:car_data/Resources/Private/Templates/
        # cat=plugin.tx_cardata_cardataplugin/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:car_data/Resources/Private/Partials/
        # cat=plugin.tx_cardata_cardataplugin/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:car_data/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_cardata_cardataplugin//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_cardata_cardatapluginnew {
    view {
        # cat=plugin.tx_cardata_cardatapluginnew/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:car_data/Resources/Private/Templates/
        # cat=plugin.tx_cardata_cardatapluginnew/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:car_data/Resources/Private/Partials/
        # cat=plugin.tx_cardata_cardatapluginnew/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:car_data/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_cardata_cardatapluginnew//a; type=string; label=Default storage PID
        storagePid =
    }
}

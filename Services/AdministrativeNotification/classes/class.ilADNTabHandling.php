<?php

/**
 * Class ilADNTabHandling
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
class ilADNTabHandling
{

    /**
     * @var int
     */
    private $ref_id;
    /**
     * @var ilRbacSystem
     */
    private $rbacsystem;
    /**
     * @var ilTabsGUI
     */
    private $tabs;
    /**
     * @var ilLanguage
     */
    private $lng;
    /**
     * @var ilCtrl
     */
    protected $ctrl;
    /**
     * @var ilHelpGUI
     */
    private $help;

    /**
     * ilMMTabHandling constructor.
     * @param int $ref_id
     */
    public function __construct(int $ref_id)
    {
        global $DIC;

        $this->ref_id = $ref_id;
        $this->tabs   = $DIC['ilTabs'];
        $this->lng    = $DIC->language();
        $this->lng->loadLanguageModule('adn');
        $this->ctrl       = $DIC['ilCtrl'];
        $this->rbacsystem = $DIC['rbacsystem'];
        $this->help       = $DIC->help();
    }

    /**
     * @param string      $tab
     * @param string|null $subtab
     * @param bool        $backtab
     * @param string|null $calling_class
     */
    public function initTabs(string $tab, string $subtab = null, bool $backtab = false, $calling_class = "")
    {
        $this->tabs->clearTargets(); // clears Help-ID

        // Help Screen-ID
        $this->help->setScreenIdComponent('adn');
        $this->help->setScreenId($tab);
        $this->help->setSubScreenId($subtab);

        if ($this->rbacsystem->checkAccess('visible,read', $this->ref_id)) {
            $this->tabs->addTab(
                ilObjAdministrativeNotificationGUI::TAB_MAIN,
                $this->lng->txt(ilObjAdministrativeNotificationGUI::TAB_MAIN),
                $this->ctrl->getLinkTargetByClass(ilObjAdministrativeNotificationGUI::class, ilObjAdministrativeNotificationGUI::TAB_MAIN)
            );
            /*
            switch ($tab) {
                case ilObjMainMenuGUI::TAB_MAIN:
                    $this->tabs->addSubTab(
                        ilMMTopItemGUI::CMD_VIEW_TOP_ITEMS,
                        $this->lng->txt(ilMMTopItemGUI::CMD_VIEW_TOP_ITEMS),
                        $this->ctrl->getLinkTargetByClass(ilMMTopItemGUI::class, ilMMTopItemGUI::CMD_VIEW_TOP_ITEMS)
                    );
                    $this->tabs->addSubTab(
                        ilMMSubItemGUI::CMD_VIEW_SUB_ITEMS,
                        $this->lng->txt(ilMMSubItemGUI::CMD_VIEW_SUB_ITEMS),
                        $this->ctrl->getLinkTargetByClass(ilMMSubItemGUI::class, ilMMSubItemGUI::CMD_VIEW_SUB_ITEMS)
                    );
                    $this->tabs->activateSubTab($subtab);
                    break;
            }
            if ($subtab === null) {
                $subtab = ilMMTopItemGUI::CMD_VIEW_TOP_ITEMS;
            }
            $this->tabs->activateSubTab($subtab);*/
        }
        if ($this->rbacsystem->checkAccess('edit_permission', $this->ref_id)) {
           $this->tabs->addTab(
                'perm_settings',
                $this->lng->txt('perm_settings'),
                $this->ctrl->getLinkTargetByClass(array(ilObjAdministrativeNotificationGUI::class, ilPermissionGUI::class), 'perm')
            );
        }
        if ($backtab) {
           /* $this->tabs->clearTargets();
            if ($calling_class == ilMMSubItemGUI::class) {
                $this->tabs->setBackTarget($this->lng->txt('tab_back'), $this->ctrl->getLinkTargetByClass(ilMMSubItemGUI::class, $subtab));
            } else {
                $this->tabs->setBackTarget($this->lng->txt('tab_back'), $this->ctrl->getLinkTargetByClass(ilObjMainMenuGUI::class, $subtab));
            }*/
        }
        $this->tabs->activateTab($tab);
    }
}

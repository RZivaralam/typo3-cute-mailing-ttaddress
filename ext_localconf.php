<?php

use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined('TYPO3')) {
    die('Access denied.');
}
// EXT:Address
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][FriendsOfTYPO3\TtAddress\Domain\Model\Address::class] = [
    'className' => \Undkonsorten\CuteMailingTtAddress\Domain\Model\Address::class,
];

// EXT: cute_mailing
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][Undkonsorten\CuteMailing\Domain\Model\SimpleRecipient::class] = [
    'className' => \Undkonsorten\CuteMailingTtAddress\Domain\Model\SimpleRecipient::class,
];
call_user_func(
    function ($extKey = 'cute_mailing_registeraddress') {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['cuteMailing_ttAddressConvertWizard']
            = \Undkonsorten\CuteMailingTtAddress\Updates\ConvertRecipientListToTtAddressUpdateWizard::class;
    }

);

